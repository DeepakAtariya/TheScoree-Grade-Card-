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
            })->where('notes__units.published','1')->distinct('notes__courses.course_code')->paginate(10,[
                'notes__programs.program_code',
                'notes__courses.course_code',
                'notes__courses.id',
                'notes__courses.course_name'
            ]);
            return view('notes/courses',[
                'course_list'=>$course_list
            ]);    
        }else{
            $program_list = Notes_Unit::join('notes__courses', function($j){
                $j->on('notes__courses.id','=','notes__units.course_id');
            })->join('notes__programs',function($j){
                $j->on('notes__courses.program_id','=','notes__programs.id');
            })->where('notes__units.published','1')->distinct('notes__programs.program_code')->paginate(10,[
                'notes__programs.program_code',
                'notes__programs.program_fullform'
            ]);
    
            // return $program_list;
    
            // return $program_list;
            return view('notes/programs',[
                'program_list'=>$program_list
            ]);
        }
    }

    public function units(Request $request){
        // return $request->course;
        $unit_list = Notes_Unit::join('notes__courses', function($j){
            $j->on('notes__courses.id','=','notes__units.course_id');
        })->join('notes__programs',function($j){
            $j->on('notes__courses.program_id','=','notes__programs.id');
        })->where('notes__units.published','1')->where('notes__units.course_id',$request->course)->paginate(10,[
            'notes__units.id',
            'notes__units.unit_name',
            'notes__programs.program_code',
            'notes__courses.course_code'
        ]);

        return view('notes/units',[
            'unit_list'=>$unit_list
        ]);

    }

    public function view(Request $request){
        $unit_data = Notes_Unit::join('notes__courses', function($j){
            $j->on('notes__courses.id','=','notes__units.course_id');
        })->join('notes__programs',function($j){
            $j->on('notes__courses.program_id','=','notes__programs.id');
        })->where('notes__units.id',$request->uuid)->where('notes__units.published','1')->get([
            'notes__units.*',
            'notes__programs.program_code',
            'notes__courses.course_code'
        ]);
     
        return view('notes/view',[
            'unit_data'=>$unit_data
        ]);


    }
}
