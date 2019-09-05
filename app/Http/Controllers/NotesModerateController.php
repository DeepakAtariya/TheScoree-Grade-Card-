<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes_Unit;
use App\Notes_Program;
use Illuminate\Support\Facades\DB;
use Auth;

class NotesModerateController extends Controller
{
    public function login(Request $request)
    {
        //credentails should be dynamic
        
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'name'=>'deepak'])){
            // return "logged in <a href='logout'>logout</a>";
            //go to listing of notes
            return redirect()->route('moderator/dashboard');
        }else{
            return "failed logged in";
        }
    }

    public function dashboard(Request $request){
        
        $data = DB::table('notes__units')
                ->join('notes__courses', 'notes__courses.id', '=', 'notes__units.course_id')
                ->join('notes__programs', 'notes__programs.id', '=', 'notes__courses.program_id')
                ->select('notes__units.*', 'notes__courses.course_name','notes__courses.course_code', 'notes__programs.program_fullform')
                ->orderBy('notes__units.published','ASC')->paginate(10);
                
            return view('admin/dashboard',[
                'final'=>$data,
                'total_notes'=>Notes_Unit::get()->count(),
                'total_published'=>Notes_Unit::where('published','1')->get()->count(),
                'total_unpublished'=>Notes_Unit::where('published','0')->get()->count(),
                'total_gradecard'=>DB::table('score')->distinct()->get(['student'])->count(),
                'pushNotiData'=>DB::table('push_notification_data')->get()->count(),
            ]);

    }

    public function edit_notes(Request $request){
        $data = DB::table('notes__units')
                ->join('notes__courses', 'notes__courses.id', '=', 'notes__units.course_id')
                ->join('notes__programs', 'notes__programs.id', '=', 'notes__courses.program_id')
                ->where('notes__units.id',$request->id)
                ->select('notes__units.*', 'notes__courses.course_name','notes__courses.course_code', 'notes__programs.program_fullform', 'notes__programs.program_code')
                ->get();

        return view('admin/edit_notes',[
            'note_data'=>$data,

        ]);
        
    }

    public function view_notes(Request $request){
        return $request->notes;
        
    }
    
    public function publish_note(Request $request){
        Notes_Unit::where('id',$request->id)->update([
            'published'=>'1'
        ]);

        return redirect()->route('moderator/dashboard');
    }

    public function unpublish_note(Request $request){
        Notes_Unit::where('id',$request->id)->update([
            'published'=>'0'
        ]);

        return redirect()->route('moderator/dashboard');
    }
    public function update_notes(Request $request){
        
        try{
            $status = Notes_Unit::where('id',$request->id)->update([
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

            return redirect()->route('moderator/dashboard');
        }catch(\Exception $e){
            return "<script>alert('fill all fields (take help from preview)'); history.go(-1);</script>";
        }

    }

    public function view_sample(Request $request){
        // return $request->notes;
        $data = DB::table('notes__units')
                ->join('notes__courses', 'notes__courses.id', '=', 'notes__units.course_id')
                ->join('notes__programs', 'notes__programs.id', '=', 'notes__courses.program_id')
                ->where('notes__units.id',$request->id)
                ->select('notes__units.*', 'notes__courses.course_name','notes__courses.course_code', 'notes__programs.program_fullform', 'notes__programs.program_code')
                ->get();

        return view('admin/view_sample',[
            'note_data'=>$data,
        ]);
        
    }


    public function logout(Request $request)
    {
            Auth::logout();
            return redirect()->route('moderate');
    }

    
}
