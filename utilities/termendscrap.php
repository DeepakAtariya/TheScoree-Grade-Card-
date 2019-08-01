<?php
use function GuzzleHttp\json_encode;

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
// print_r($client);
$foundName = '';
// echo $program;
$program = 'BCA';
$enrollment = '159673056';


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
                    "eno"=> "159673056",
                    "myhide"=> "OK",
                    "submit"=>"Submit"
                ]
            ]);
            
            
            $body = $response->getBody()->getContents();
            // echo $body;
            // }
        
//             // exit;
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
            // $foundName = trim($foundName,"</b>");
            // echo $foundName."asdasda";
            // exit;

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

            // echo json_encode($termEndResult,TRUE);





//             echo 


?>