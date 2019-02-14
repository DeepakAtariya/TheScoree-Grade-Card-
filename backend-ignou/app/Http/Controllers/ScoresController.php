<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ScoresController extends Controller
{   
    private function getScores($program, $enrollment) {
        /*
            this function is responsible for requesting external server too fetch the information
        */
        $client = new Client();
        $foundName = '';

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
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $data = $dom->querySelectorAll('table');
            
            echo $data;
        }catch(Exception $e){
            // return "error : ".$e;
            
        }
    }

    public function test()
    {
        return "sadasdas";
    }

}
