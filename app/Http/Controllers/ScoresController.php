<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ScoresController extends Controller
{
        private $program;
    private $enrollment;
    private $foundName;


    private function updateData($row){
        
        foreach ($row as $col){

            
            if(strpos($col[0], 'rse') == FALSE){
				DB::table('score')->where('course_code',$col[0])->where('student',$this->enrollment)->update(
                    array(
                        'student'   =>  $this->enrollment,
                            'course_code' => $col[0],
                            'asgn1' => $col[1],
                            'lab1' => $col[2],
                            'lab2' => $col[3],
                            'lab3' => $col[4],
                            'lab4' => $col[5],
                            'theory' => $col[6],
                            'status' => (string)$col[7],
                            'total'=> $col[8],
                            'program'=> $this->program,
                            'name'=> $this->foundName
                    )
                );
				
				
				// $student_data = DB::table('score')->where('student',$this->enrollment)->get('id');
				// echo sizeof($student_data);
				// exit;
            }
        }   
        // exit;
    }


    private function dataSavedIntoScoreTable($row){
        
        foreach ($row as $col){
            
            if(strpos($col[0], 'Course') == FALSE){
                // return  $col[0];
            
            // $student_details_row = DB::table('student_details')
            //     ->select('id')
            //     ->where('enrollment',$this->enrollment)
            //     ->get();

            // $student_id = $student_details_row[0]->id;
            // echo $student_id;
            // break;
            

                DB::table('score')->insert(
                    array(
                        'student'   =>  $this->enrollment,
                            'course_code' => $col[0],
                            'asgn1' => $col[1],
                            'lab1' => $col[2],
                            'lab2' => $col[3],
                            'lab3' => $col[4],
                            'lab4' => $col[5],
                            'theory' => $col[6],
                            'status' => (string)$col[7],
                            'total'=> $col[8],
                            'program'=> $this->program,
                            'name'=> $this->foundName
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
            // $col[8] = $d->total;

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
        // echo $request->input('program')."<br>". $request->input('enrollment');
        // exit;
        


        // if (strcmp($this->program,"ASSO")==0 || strcmp($this->program,"BA")==0 || strcmp($this->program,"BCOM")==0 || strcmp($this->program,"BDP")==0 || strcmp($this->program,"BSC")==0) {
        //     $grade_card_url = "https://gradecard.ignou.ac.in/gradecardB/Result.asp";
        // }else if(strcmp($this->program,"BCA")==0 || strcmp($this->program,"MCA")==0 || strcmp($this->program,"MP")==0 || strcmp($this->program,"MPB")==0 || strcmp($this->program,"PGDHRM")==0 || strcmp($this->program,"PGDFM")==0 || strcmp($this->program,"PGDOM")==0 || strcmp($this->program,"PGDMM")==0 || strcmp($this->program,"PGDFMP")==0){
        //     $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardM/Result.asp';
        // }else{
        //     $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardR/Result.asp';
        // }

        $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardM/Result.asp';

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
            // exit;
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $data = $dom->querySelectorAll('b');
            for($i=0; $i<$data->length; $i++){
                if (strpos($data[$i],"Name")==true){
                    $foundName = substr($data[$i],10);
                }
            }
            $this->foundName = trim($foundName,"</b>");


            $items = $dom->getElementsByTagName('tr');

            // print_r($items);

            $row = array();
            
            $r_i = 0;

            $course_data = DB::table('course')
                    ->where('program',$this->program)
                    ->get();
            
            // return $course_data[1]->name;


            $c = -1;
            $data = 0;
            foreach ($items as $node) {
                $course_name = array();
                $cn = $node->childNodes;
                $col = array();
                $i = 0;
                foreach($cn as $v){
                    $col[$i] = strip_tags((string)$v);
                    $i++;
                }
                $assgn = 0;
                $theory = $lab1 = $lab2 = $lab3 = $lab4 = 0;
                for($j=0; $j<sizeof($col); $j++){

                    if($j == 1 && $col[$j]!="-" ){
                        // assignment marks
                        $assgn = ((int)$col[$j]/100)*25;
                        // break;
                    }
                    if($j == 2 && $col[$j]!="-"){
                        //lab1 marks
                        $lab1 = ((int)$col[$j]/100)*75;
                        // break;
                    }
                    if($j == 3 && $col[$j]!="-"){
                        // lab2 marks
                        $lab2 = ((int)$col[$j]/100)*75;
                        // break;
                    }
                    if($j == 4 && $col[$j]!="-"){
                        // lab3 marks
                        $lab3 = ((int)$col[$j]/100)*75;
                        // break;
                    }
                    if($j == 5 && $col[$j]!="-"){
                        //lab 4
                        $lab4 = ((int)$col[$j]/100)*75;
                        // break;
                    }
                    if($j == 6 && $col[$j]!="-"){
                        // theory
                        $theory = ((int)$col[$j]/100)*75;
                        // break;
                    }
                }
                
                // if(strcmp($col[0],"MCSL036")==0){

                //     // return "assign -".$assgn." lab1 -".$lab1."lab2 - ".$lab2."lab3 - ".$lab3."lab4 - ".$lab4."theory - ".$theory;
                //     $lab_marks = $lab1+$lab2+$lab3+$lab4;

                //     return $assgn+$theory+$lab_marks;
                // }
                // if(strcmp($col[0],"BCSP064")!=0){
                //     $lab_marks = (($lab1+$lab2+$lab3)/300)*100;
                // }else{
                    // $lab_marks = $lab1+$lab2+$lab3+$lab4;
                // }


                if($lab1!=0 && $lab2!=0 && $lab3!=0 && $lab4!=0){
                    $lab_marks = (($lab1+$lab2+$lab3+$lab4)/400)*100;
                    
                }else if($lab1!=0 && $lab2!=0 && $lab3!=0){
                    $lab_marks = (($lab1+$lab2+$lab3)/300)*100;
                }else if($lab1!=0 && $lab2!=0){
                    $lab_marks = (($lab1+$lab2)/200)*100;
                }else if($lab1!=0){
                    $lab_marks = (($lab1)/100)*100;
                }else{
                    $lab_marks = $lab1+$lab2+$lab3+$lab4;
                }

                if(strcmp($col[0],"BCSP064")==0){
                    $project_marks = ((int)$col[2]/100)*150;
                    $project_viva = ((int)$col[3]/100)*50;
                    $project_marks_in_hun = ($project_marks + $project_viva)/2;
                    $lab_marks  = $project_marks_in_hun;
                }
                if(strcmp($col[0],"MCS044")==0){
                    $project_marks = ((int)$col[5]/100)*50;
                    $project_viva = ((int)$col[6]/100)*25;
                    // $project_marks_in_hun = ($project_marks + $project_viva)/2;
                    $lab_marks  = $project_marks + $project_viva;
                    $theory = 0;
                }

                    
                array_push($col,ceil($assgn+$theory+$lab_marks));
                for($c = 0; $c<sizeof($course_data); $c++){
                    if($col[0] == $course_data[$c]->code){
                        array_push($col,$course_data[$c]->name);
                        break;
                    }
                }
                    

                // if($c>0 && $c<=39){
                //     array_push($col,$course_data[$data]->name);
                //     $data++;
                // }

                $row[$r_i] = $col;
                $r_i++;
            }
            $outof = 0;
            $earned_marks = 0;
            for($i=1; $i<sizeof($row); $i++){
                $outof += 100;
                $earned_marks += $row[$i][8];
            }
            // return $outof;
            if(sizeof($row)>1 && sizeof($row[0])>1){

                // echo "I have got the results";

                // deleting all the data for particular enrollment
                // $row_id = DB::table('student_details')
                //             ->select('id')
                //             ->where('enrollment',$this->enrollment)
                //             ->get();
                // $student_id = $row_id[0]->id;

				try{
					$check_oldnew = DB::table('score')
								->where('student',$this->enrollment)
								->where('program',$this->program)
								->get(['id'])[0];
					
					$this->updateData($row);

				}catch(\Exception $e){
					$this->dataSavedIntoScoreTable($row);
				}
                
                // Reset auto number
                // DB::statement('ALTER TABLE score AUTO_INCREMENT=1;');


                // inserting updated grade card into score table
                

                // return response()->json([
                //     'scores' => $row,
                //     'earned_marks' => $earned_marks,
                //     'outof' => $outof,
                //     'percent'=>($earned_marks/$outof)*100
                // ],201);

                return [
                    'scores'=>$row,
                    'name'=>str_replace('</b>','',$foundName),
                    'enrollment'=>$this->enrollment,
                    'earned_marks' => $earned_marks,
                    'outof' => $outof,
                    'percent'=>round(($earned_marks/$outof)*100,2),
                    'status'=>'200'
                ];
            }else{

                // echo "No results";
                return [
                    'scores' => $row,
                    'status' => '404',   
                ];
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

    public function getGradeCard(Request $request)
    {
        $data = $this->getScores($request);
        return redirect()->route('scores',[
            'program'=>$request->input('program'),
            'enrollment'=>$request->input('enrollment')
        ]);
        // print_r($data['scores']);
    }

    public function scores(Request $request)
    {

        $data = $this->getScores($request);
        if($data['status']!="404"){
            return view('scores',[
                'scores'=>$data
            ]);
        }else{
            return view('error',[
                'message'=>'Not available, please check your enrollment and program'
            ]);
        }
    }
}