<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request){
        $data = $request->input('enrollment');
        return response()->json(['hey'=>'hey'],201);

        // return "show method!";
    }

    public function testGet(){
        // $data = $request->input('enrollment');
        return "aa";

        // return "show method!";
    }
}
