<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\termend;

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
                    // echo $data[$i]."<br>";
                    if (strpos($data[$i],"Program")==true){
                        $foundProgram = substr($data[$i],13);
                        // echo $foundProgram;
                        // exit;
                            // echo $foundenrollment;
                    }
                    if (strpos($data[$i],"Enrolment Number")==true){
                        $foundenrollment = substr($data[$i],21);
                            // echo $foundenrollment;
                    }
                }
                // exit;

                if(strlen($foundenrollment)>0){
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
                    // str_replace("</br>",".",$foundenrollment);
                    $foundenrollment = substr($enrollment,0,10);
                    // return $foundenrollment;

                    //save into the database
                    // echo $foundenrollment;
                    termend::firstOrCreate([
                        'enrollment'=>$foundenrollment,
                        'program'=>$foundProgram
                    ]);
                    // if(!termend::where('enrollment',$foundenrollment)){
                    //     $termend = new termend();
                    //     $termend->enrollment = $foundenrollment;
                    //     $termend->program = $foundProgram;
                    //     $termend->save();
                    // }else{
                    //     // do nothing
                    //     echo "ff";
                    //     exit;
                    // }
                    
                    return view('termend',[
                        'termendresult'=>$termEndResult,
                        'enrollment'=>$foundenrollment
                    ]);
                }else{
                    return view('error',[
                        'termendresult'=>$termEndResult,
                        'enrollment'=>$foundenrollment
                    ]);
                }
        }catch(\Exception $e){
            return "<script>alert('Enrollment not found, please try agian.'); history.go(-1);</script>";
            return view('error',[
                'message'=>"Please enter valid enrollment number",
            ]);
            // dd($e);
        }

    }

}
