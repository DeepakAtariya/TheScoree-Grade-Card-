<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


/*
    Add few more fields into score table:
        1. score types : assignments, theory, practical (lab 1 , lab2, etc)
    problem : how will you enter the scores in the database for different students
*/

class ScoresController extends Controller
{   
    private $program;
    private $enrollment;

    private function dataSavedIntoScoreTable($row){

        foreach ($row as $col){

            if(strpos($col[0], 'Course') == FALSE){
            
            
            $student_details_row = DB::table('student_details')
                ->select('id')
                ->where('enrollment',$this->enrollment)
                ->get();

            $student_id = $student_details_row[0]->id;
            // echo $student_id;
            // break;
            

            DB::table('score')->insert(
                array(
                       'student'   =>  $student_id,
                        'course_code' => $col[0],
                        'asgn1' => $col[1],
                        'lab1' => $col[2],
                        'lab2' => $col[3],
                        'lab3' => $col[4],
                        'lab4' => $col[5],
                        'theory' => $col[6],
                        'status' => (string)$col[7],
                        'total'=> $col[8]
                )
           );
        }
        }   
    }


    public function getScoresFromDatabase(Request $request)
    {
        $enrollment = $request->input('enrollment');
        // $password = $request->input('password');

        $dataWhenIgnouServerNotActive = DB::table('score')
                ->select('score.course_code','score.asgn1','score.lab1','score.lab1','score.lab2','score.lab3','score.lab4','score.theory','score.status','score.total')
                ->join('student_details','student_details.id','=','score.student')
                ->where('student_details.enrollment', $enrollment)
                ->get();

        $row = array();
        foreach($dataWhenIgnouServerNotActive as $d){
            $col = array();
            $col[0] = $d->course_code;
            $col[1] = $d->asgn1;
            $col[2] = $d->lab1;
            $col[3] = $d->lab2;
            $col[4] = $d->lab3;
            $col[5] = $d->lab4;
            $col[6] = $d->theory;
            $col[7] = $d->status;
            $col[8] = $d->total;

            array_push($row,$col);
        }

        return response()->json([
            'scores' => $row
        ]);
    }

    public function getScores(Request $request) {
        /*
            this function is responsible for requesting external server too fetch the information
        */
        $client = new Client();
        $foundName = '';
        // echo $program;
        $this->program = $request->input('program');
        $this->enrollment = $request->input('enrollment');
        


        if (strcmp($this->program,"ASSO")==0 || strcmp($this->program,"BA")==0 || strcmp($this->program,"BCOM")==0 || strcmp($this->program,"BDP")==0 || strcmp($this->program,"BSC")==0) {
            $grade_card_url = "https://gradecard.ignou.ac.in/gradecardB/Result.asp";
        }else if(strcmp($this->program,"BCA")==0 || strcmp($this->program,"MCA")==0 || strcmp($this->program,"MP")==0 || strcmp($this->program,"MPB")==0 || strcmp($this->program,"PGDHRM")==0 || strcmp($this->program,"PGDFM")==0 || strcmp($this->program,"PGDOM")==0 || strcmp($this->program,"PGDMM")==0 || strcmp($this->program,"PGDFMP")==0){
            $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardM/Result.asp';
        }else{
            $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardR/Result.asp';
        }

        try{
            $response = $client->request('POST', $grade_card_url,[
            'form_params' => [
                'Program' => $this->program,
                'eno' => $this->enrollment,
                'submit' => 'Submit',
                'hidden_submit' => 'OK'
                ]
            ]);
            
            
            $body = $response->getBody()->getContents();
            // echo $body;
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $items = $dom->getElementsByTagName('tr');

            // print_r($items);

            $row = array();
            
            $r_i = 0;

            foreach ($items as $node) {
                $cn = $node->childNodes;
                $col = array();
                $i = 0;
                foreach($cn as $v){
                    $col[$i] = strip_tags((string)$v);
                    $i++;
                }
                $assgn = 0;
                $theory = 0;
                for($j=0; $j<sizeof($col); $j++){

                    if(strcmp($col[$j],"BCSP064")==0){
                        $assgn = $theory = 0;
                        break;
                    }
                    if($j == 1 && $col[$j]!="-"){
                        $assgn = ((int)$col[$j]/100)*25;
                    }
                    if($j == 2 && $col[$j]!="-"){
                        $theory = ((int)$col[$j]/100)*75;
                    }
                    if($j == 3 && $col[$j]!="-"){
                        $theory = ((int)$col[$j]/100)*75;
                    }
                    if($j == 4 && $col[$j]!="-"){
                        $theory = ((int)$col[$j]/100)*75;
                    }
                    if($j == 5 && $col[$j]!="-"){
                        $theory = ((int)$col[$j]/100)*75;
                    }
                    if($j == 6 && $col[$j]!="-"){
                        $theory = ((int)$col[$j]/100)*75;
                    }
                    
                }
                
                array_push($col,ceil($assgn+$theory));

                $row[$r_i] = $col;
                $r_i++;
            }

            if(sizeof($row)>1 && sizeof($row[0])>1){

                // echo "I have got the results";

                //deleting all the data for particular enrollment
                $row_id = DB::table('student_details')
                            ->select('id')
                            ->where('enrollment',$this->enrollment)
                            ->get();
                $student_id = $row_id[0]->id;

                DB::table('score')
                    ->where('student',$student_id)
                    ->delete();

                //Reset auto number
                DB::statement('ALTER TABLE score AUTO_INCREMENT=1;');


                // inserting updated grade card into score table
                $this->dataSavedIntoScoreTable($row);

                return response()->json([
                    'scores' => $row,
                    'status' => 'database passed'
                ],201);
            }else{

                // echo "No results";
                return response()->json([
                    'scores' => $row,
                    'status' => 'database failed'
                ],201);
            }

            // return response()->json([
            //     'scores' => $row,
            //     'status' => 'database passed'
            // ],201);
            
        }catch(Exception $e){

            echo "exception occured";
            // $enrollment=159673056;

            // $dataWhenIgnouServerNotActive = DB::table('score')
            //     ->select('score.course_code','score.asgn1','score.lab1','score.lab1','score.lab2','score.lab3','score.lab4','score.theory','score.status')
            //     ->join('student_details','student_details.id','=','score.student')
            //     ->where('enrollment', $enrollment)
            //     ->get();

            return response()->json([
                'scores' => 'fail'
            ],201);
        }
    }

    public function test()
    {
        return "sadasdas";
    }

}
