<?php

namespace App\Http\Controllers;

use App\Notes_Course;
use App\Notes_Unit;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function notes(Request $request){
        
        if($request->input('program')!='' && $request->input('program')!='0'){
            $course_list = Notes_Unit::join('notes__courses', function($j){
                $j->on('notes__courses.id','=','notes__units.course_id');
            })->join('notes__programs',function($j){
                $j->on('notes__courses.program_id','=','notes__programs.id');
            })->paginate(10,[
                'notes__courses.course_code',
                'notes__courses.course_name'
            ]);
            return view('notes/viewNotes',[
                'program_list'=>$course_list
            ]);    
        }else{
            $program_list = Notes_Unit::join('notes__courses', function($j){
                $j->on('notes__courses.id','=','notes__units.course_id');
            })->join('notes__programs',function($j){
                $j->on('notes__courses.program_id','=','notes__programs.id');
            })->paginate(10,[
                'notes_programs.program_code',
                'notes_programs.program_fullform'
            ]);
    
            // return $program_list;
    
            return view('notes/viewNotes',[
                'program_list'=>$program_list
            ]);
        }
    }
}
