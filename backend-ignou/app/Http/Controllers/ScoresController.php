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
    public function getScores(Request $request) {
        /*
            this function is responsible for requesting external server too fetch the information
        */
        $client = new Client();
        $foundName = '';
        // echo $program;
        $program = $request->input('program');
        $enrollment = $request->input('enrollment');

        try{
            $response = $client->request('POST', 'https://gradecard.ignou.ac.in/gradecardM/Result.as',[
            'form_params' => [
                'Program' => $program,
                'eno' => $enrollment,
                'submit' => 'Submit',
                'hidden_submit' => 'OK'
                ]
            ]);
            
            
            $body = $response->getBody()->getContents();
            // echo $body;
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $items = $dom->getElementsByTagName('tr');

            
            $row = array();
            
            $r_i = 0;

            foreach ($items as $node) {
                $cn = $node->childNodes;
                $col = array();
                $i = 0;
                // print_r($cn[0]);
                foreach($cn as $v){
                    $col[$i] = strip_tags((string)$v);
                    $i++;
                }
                $row[$r_i] = $col;
                $r_i++;
            }
            echo $enrollment=159673056;
            

            return response()->json([
                'scores' => $row
            ],201);
        }catch(Exception $e){
            $enrollment=159673056;

            $dataWhenIgnouServerNotActive = DB::table('score')
                ->select('score.course_code','score.asgn1','score.lab1','score.lab1','score.lab2','score.lab3','score.lab4','score.theory','score.status')
                ->join('student_details','student_details.id','=','score.student')
                ->where('enrollment', $enrollment)
                ->get();

            return response()->json([
                'scores' => $dataWhenIgnouServerNotActive
            ],201);
        }
    }

    public function test()
    {
        return "sadasdas";
    }

}
