<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\feedback;
// use App\Score



class ProfileController extends Controller
{
    private $program;
    private $enrollment;
    private $name;
    private $email;
    private $contact;
	

	public function gotFeedback(Request $request){
		if($request->input('key') == "5422"){
			$count = feedback::count();
		return response()->json([
			'count'=>$count,
			'data'=>feedback::get()
		]);
		}else{
			return response()->json([
				'feedback'=>'failed',
			]);
		}
		
		
		// print_r(DB::table('score')->distinct()->count());
	}

	
	public function count(Request $request){
		if($request->input('key') == "5422"){
			$count = DB::table('score')->distinct()->get(['student'])->count();
			$countViaTermEnd = DB::table('termends')->get(['enrollment'])->count();
		return response()->json([
            'count'=>$count,
            'termend_count'=>$countViaTermEnd,
            'data'=>DB::table('score')->distinct()->get(['student','name','program']),
            'viaTermend'=>DB::table('termends')->distinct()->get(['enrollment','program'])
		]);
		}else{
			return response()->json([
				'count'=>'failed',
			]);
		}
		
		
		// print_r(DB::table('score')->distinct()->count());
	}

    
    public function onGet(Request $request){

        //this function is responsible to get data from angular main page

        $this->program = $request->input('program');
        $this->enrollment = $request->input('enrollment');
        
        
        $user = DB::table('student_details')->where('enrollment', $this->enrollment)->first();
  

        if(isset($user)){
            return response()->json([
                'status' => 'old',
                'name' => $user->name,
                'enrollment'=> $user->enrollment,
                'program' => $user->program,
                'email' => $user->email,
                'password' => $user->password
            ],201);
        }else{
            $fetchedStudentName = $this->onFetchServerData($this->program, $this->enrollment);
            if($fetchedStudentName!==""){
                return response()->json([
                    'status' => 'new',
                    'name' => $fetchedStudentName,
                    'enrollment'=> $this->enrollment,
                    'program' => $this->program
                ],201);
            }else{
                return response()->json([
                    'status' => 'error'
                ],404);
            }
        }
    }

    //login (For existing users)
    public function doLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $auth = DB::select("select * from student_details where email='".$username."'");
        // return $auth;
        if (Hash::check($password, $auth[0]->password)) {
            // The passwords match...
            // echo "password = true";

            

            return response()->json([
                'program'=> $auth[0]->program,
                'enrollment'=> $auth[0]->enrollment,
                'auth'=> 'true'
            ],201);
        }else{
            // echo "password = false";
            return response()->json([
                'auth'=> 'false'
            ],201);
        }

    }

    //sign up (For new users only)
    public function saveSignUpData(Request $request) {

        //check the enrollment with ignou server
        $program = $request->input('program');
        $enrollment = $request->input('enrollment');
        $StudentName = $this->onFetchServerData($program, $enrollment);
        // $StudentName = $this->onFetchServerData('bca','159673056');
        // echo $StudentName;
        if($StudentName!=""){

        //save into database
        
        try{
            $student_details = new \App\student_details();
            $student_details->name = $request->input('name');
            $student_details->enrollment = $request->input('enrollment');
            $student_details->program = $request->input('program');
            $student_details->email = $request->input('email');
            $student_details->mobile = $request->input('mobile');
            $student_details->password = Hash::make($request->input('password'));
            $student_details->save();
            // $data = $request->input('name');

            return response()->json([
                'student' => 'valid'
            ],200);
        }catch(Exception $e){
            return response()->json([
                'status' => 'no'
            ],503);
        }
        

        }else{
            return response()->json([
                'student' => 'invalid'
            ]);
        }
        
    }

    private function onFetchServerData($program, $enrollment) {
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
            $data = $dom->querySelectorAll('b');
            for($i=0; $i<$data->length; $i++){
                if (strpos($data[$i],"Name")==true){
                    $foundName = substr($data[$i],10);
                }
            }
            $foundName = trim($foundName,"</b>");
            return $foundName;
        }catch(Exception $e){
            // return "error : ".$e;
            
        }
    }

    //guest users
    public function verifyenrollment(Request $request) {

        //check the enrollment with ignou server
        $program = $request->input('program');
        $enrollment = $request->input('enrollment');
        $StudentName = $this->onFetchServerData($program, $enrollment);
        // $StudentName = $this->onFetchServerData('bca','159673056');
        // echo $StudentName;
        if($StudentName!=""){
            return response()->json([
                'student' => $StudentName
            ]);
        }else{
            return response()->json([
                'student' => 'invalid'
            ]);
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

    public function test(Request $response) {
        return response()->json([
            'p' => $response->input('program'),
            'e' => $response->input('enrollment')
        ],201);
    }
	
	


}
