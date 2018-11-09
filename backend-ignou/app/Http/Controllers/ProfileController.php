<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    }

    public function onFetchServerData(Response $response){

        /*this function is responsible for requesting external server too fetch the information
            use guzzle httpClitn library to make it happen
        */


    }
}
