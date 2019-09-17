<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes_Program;
use App\Notes_Course;
use App\Notes_Unit;

class NotesCollectionController extends Controller
{

    public function preview_notes(Type $var = null)
    {
        # code...
    }

    public function submitNotes(Request $request){

        // return $request->unit_description;
        unset($request['_token']);
        // return $request;

        $status = Notes_Unit::insert([
            'course_id'=>$request->course_id,
            'unit_name'=>$request->unit_name,
            'unit_description'=>$request->unit_description,
            'unit_application'=>$request->unit_application,
            'unit_importantQuestions'=>$request->unit_importantQuestions,
            'unit_reference'=>$request->unit_reference,
            'unit_author_name'=>$request->unit_author_name,
            'unit_author_email'=>$request->unit_author_email,
            'published'=>'0'
        ]);

        
        return redirect()->route('notes/expert',[
            'status'=>$status
        ])->with('success','Your efforts have been recorded, be relax we will inform you once it is published');

    }
    public function expert(Request $request){
        // return $request->unit_desc;
        return view('notes/index',[
            'program'=>Notes_Program::get()
        ]);
    }
    public function addprogram(Request $request){
        // return $request->unit_desc;
        // return $request;
        // unset($request['_token']);
        Notes_Program::insert([
            'program_code'=>$request->program_code,
            'program_fullform'=>$request->program_fullform
        ]);

        return view('notes/addprogram');
    }
    
    public function getCourses(Request $request){
        // return $request->unit_desc;
        // return $request;
        // unset($request['_token']);
        return response()->json([
           'data'=>Notes_Course::where('program_id',$request->program_id)->get() 
        ]);
    }
}
