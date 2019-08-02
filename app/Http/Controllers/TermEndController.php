<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermEndController extends Controller
{
    public function termend(Request $request){

        $enrollment = $request->input('enrollment');
        // return $enrollment;
        // exit;

        try{

            $client = new \GuzzleHttp\Client();
            // print_r($client);
            $foundName = '';
            // echo $program;
            $program = 'BCA';
            // $enrollment = '159673056';
    
    
            $termendJuly2019 = 'https://ignouhall.ignou.ac.in/TEResult/TermEndJune19/TermEndJune19.asp';
            $termendJuly2018 = 'https://ignouhall.ignou.ac.in/TEResult/TermEndDec18/TermEndDec18.asp';
    
            /*
            {
                "eno": "159673056",
                "myhide": "OK"
            }
            */
    
                    // try{
                $response = $client->request('POST', $termendJuly2018,[
                    'form_params' => [
                        "eno"=> $enrollment,
                        "myhide"=> "OK",
                        "submit"=>"Submit"
                    ]
                ]);        
                
                $body = $response->getBody()->getContents();
    
                $dom = new \IvoPetkov\HTML5DOMDocument();
                $dom->loadHTML($body);
                $data = $dom->querySelectorAll('b');
                        
                for($i=0; $i<$data->length; $i++){
                    // echo $i." -- ".$data[$i]."<br>";
                    if (strpos($data[$i],"Enrolment Number")==true){
                        $foundenrollment = substr($data[$i],21);
                            // echo $foundenrollment;
                        }
                }
                $items = $dom->getElementsByTagName('tr');
                $termEndResult  = array();
                foreach($items as $item){
                    $cn = $item->childNodes;
                    $col = array();
                    $i = 0;
                    foreach($cn as $v){
                        $col[$i] = strip_tags((string)$v);
                        $i++;
                    }

                    array_push($termEndResult, $col);
                }
    
                // return $foundenrollment;
            return view('termend',[
                'termendresult'=>$termEndResult
            ]);
        }catch(\Exception $e){
            return response()->json([
                'eno'=>'404',
                'err'=>$enrollment
            ]);
        }

    }

}
