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
            DB::table('score')->insert(
                array(
                       'student'   =>  DB::table('score')
                                        ->select('id')
                                        ->where('enrollment',$this->enrollment),
                        'course_code' => $col[0],
                        'asgn1' => $col[1],
                        'lab1' => $col[2],
                        'lab2' => $col[3],
                        'lab3' => $col[4],
                        'lab4' => $col[5],
                        'theory' => $col[6],
                        'status' => (string)$col[7],
                )
           );
        }   
    }


    public function getScoresFromDatabase(Request $request)
    {
        $enrollment = $request->input('enrollment');
        $password = $request->input('password');
        return response()->json([
            'scoreFromDatabase' => $enrollment
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

        try{
            $response = $client->request('POST', 'https://gradecard.ignou.ac.in/gradecardM/Result.asp',[
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

                for($j=0; $j<sizeof($col); $j++){
                    if($j == 1){
                        $assgn = ((int)$col[$j]/100)*25;
                    }
                    if($j == 6){
                        $theory = ((int)$col[$j]/100)*75;
                    }
                }

                array_push($col,ceil($assgn+$theory));

                $row[$r_i] = $col;
                $r_i++;
            }

            if(sizeof($row)>1 && sizeof($row[0])>1){

                echo "I have got the results";

                //deleting all the data for particular enrollment
                // DB::table('score')
                    // ->where('enrollment',$this->enrollment)
                    // ->delete();

                // inserting updated grade card into score table
                // $this->dataSavedIntoScoreTable($row);

                return response()->json([
                    'scores' => $row,
                    'status' => 'database passed'
                ],201);
            }else{

                echo "No results";
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
