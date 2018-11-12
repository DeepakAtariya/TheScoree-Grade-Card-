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
        $fetchedStudentName = $this->onFetchServerData();
        // return $fetchedStudentName;
        if($fetchedStudentName!==""){
            return response()->json([
                'name' => $fetchedStudentName,
                'enrollment'=> $this->enrollment,
                'program' => $this->program
            ],201);
    
        }else{
            return response()->json([
                'error' => "something went wrong!"
            ],404);
        }
        
    }

    public function onSave(Response $response) {

        //save database
    }

    private function onFetchServerData() {
        /*
            this function is responsible for requesting external server too fetch the information
        */
        $client = new Client();
        $foundName = '';

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
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $data = $dom->querySelectorAll('b');
            for($i=0; $i<$data->length; $i++){
                if (strpos($data[$i],"Name")==true){
                    $foundName = substr($data[$i],10);
                }
            }
            return $foundName ;
        }catch(Exception $e){
            return "error : ".$e;
        }
    }

    public function onTestHttpClient(Request $req){        

        /* 
            This  function is just for test the http client requests and responses 
        $client = new Client();
        $foundName = '';

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
                // echo $data[$i]."<br>";
                if (strpos($data[$i],"Name")==true){
                    $foundName = substr($data[$i],10);
                }
            }
            return $foundName;
        }catch(Exception $e){
            return "error : ".$e;
        }
    */
    }
}
