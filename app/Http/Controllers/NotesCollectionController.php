<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes_Program;
use App\Notes_Course;
use App\Notes_Unit;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage; 

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

    /*
    public function saveImage(Request $request){
        if(isset($_FILES['upload']['name'])){
            $file = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];
            $file_name_array = explode(".", $file_name);
            $extension = end($file_name_array);
            $new_image_name = rand() . '.' . $extension;
            // chmod('upload', 0777);
            $allowed_extension = array("jpg", "gif", "png");
            if(in_array($extension, $allowed_extension)){
                move_uploaded_file($file, 'images/' . $new_image_name);
                // Storage::putFileAs('images/', $file ,$new_image_name );

                // $qry="Insert into ckfile(file_name) values($new_image_name)";
                // $str=mysqli_query($conn,$qry);
                $function_number = $_GET['CKEditorFuncNum'];
                // $url = 'images/' . $new_image_name;
                $url = URL::asset('images/'.$new_image_name);
                $message = '';
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
            }
        }
    }
    */
    public function saveImage(Request $request){
        // echo $request->hasFile('upload')?'true':'false';exit;
        if($request->hasFile('upload')){
            $file = $request->file('upload');
            $file_name = $request->input('upload').'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $file_name);
        }

        $url = URL::asset('images/'.$file_name);
        $message = '';
        $function_number = $_GET['CKEditorFuncNum'];
        return "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
    }
}
