<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class ProfileController extends Controller
{
    private $program;
    private $enrollment;
    private $name;
    private $email;
    private $contact;
    public function onGet(Request $request){

        //this function is responsible to get data from angular main page

        $this->program = $request->input('Program');
        $this->enrollment = $request->input('enrollment');
        $fetchedProfileData = onFetchServerData($request);
        return response()->json(['enroll'=>$request->input('enrollment')],201);

    }

    public function onSave(Response $response){

        //save database
    }

    private function onFetchServerData(Response $response){

        /*
            this function is responsible for requesting external server too fetch the information
            use guzzle httpClitn library to make it happen
        */

        $client = new Client();

        try{
            $response = $client->request('POST', 'https://gradecard.ignou.ac.in/gradecardM/Result.asp',[
            'form_params' => [
                'Program' => 'BCA',
                'eno' => '159673056',
                'submit' => 'Submit',
                'hidden_submit' => 'OK'
                ]
            ]);
            $body = $response->getBody()->getContents();

            // IvoPetkov\HTML5DOMDocument() is used to handle HTML code in a better way
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $data = $dom->querySelectorAll('b');
            for($i=0; $i<$data->length; $i++){
                echo $data[$i]."<br>";
            }
        }catch(Exception $e){
            return "error : ".$e;
        }finally{
            // echo "server is working!";
        }
    }

    public function onTestHttpClient(Request $req){        

        /* This  function is just for test the http client requests and responses */
        
        /*
        $client = new Client();

        try{
            $response = $client->request('POST', 'https://gradecard.ignou.ac.in/gradecardM/Result.asp',[
            'form_params' => [
                'Program' => 'BCA',
                'eno' => '159673056',
                'submit' => 'Submit',
                'hidden_submit' => 'OK'
                ]
            ]);
            $body = $response->getBody()->getContents();

            // \IvoPetkov\HTML5DOMDocument() is used to handle HTML code in a better way
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $data = $dom->querySelectorAll('b');
            for($i=0; $i<$data->length; $i++){
                echo $data[$i]."<br>";
            }
        }catch(Exception $e){
            return "error : ".$e;
        }finally{
            // echo "server is working!";
        }  
    */
    }
}
