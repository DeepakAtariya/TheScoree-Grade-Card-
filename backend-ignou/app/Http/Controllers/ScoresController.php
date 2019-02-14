<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ScoresController extends Controller
{   
    public function getScores($program="Bca", $enrollment="159673056") {
        /*
            this function is responsible for requesting external server too fetch the information
        */
        $client = new Client();
        $foundName = '';
        // echo $program;

        try{
            $response = $client->request('POST', 'https://gradecard.ignou.ac.in/gradecardM/Result.asp',[
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
            // print_r($row);

            return response()->json([
                'scores' => $row
            ],201);
        }catch(Exception $e){
            // return "error : ".$e;
            return response()->json([
                'scores' => 'No data found'
            ],500);
        }
        
        // return "ss";
    }

    public function test()
    {
        return "sadasdas";
    }

}
