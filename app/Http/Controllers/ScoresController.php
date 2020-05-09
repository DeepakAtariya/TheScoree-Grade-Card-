<?php

namespace App\Http\Controllers;

use App\ba;
use App\bca;
use App\bcom;
use App\bdp;
use App\BSC;
use App\mca;
use App\MCOM;
use App\meg;
use App\MPS;
use App\Notes_Unit;
use App\Notes_Course;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDF;

class ScoresController extends Controller
{
    private $program;
    private $enrollment;
    private $foundName;


    private function updateData($row)
    {

        foreach ($row as $col) {


            if (strpos($col[0], 'rse') == FALSE) {
                DB::table('score')->where('course_code', $col[0])->where('student', $this->enrollment)->update(
                    array(
                        'student'   =>  $this->enrollment,
                        'course_code' => $col[0],
                        'asgn1' => $col[1],
                        'lab1' => $col[2],
                        'lab2' => $col[3],
                        'lab3' => $col[4],
                        'lab4' => $col[5],
                        'theory' => $col[6],
                        'status' => (string) $col[7],
                        'total' => $col[8],
                        'program' => $this->program,
                        'name' => $this->foundName
                    )
                );


                // $student_data = DB::table('score')->where('student',$this->enrollment)->get('id');
                // echo sizeof($student_data);
                // exit;
            }
        }
        // exit;
    }


    private function dataSavedIntoScoreTable($row)
    {
        foreach ($row as $col) {
            if (strpos($col[0], 'Course') == FALSE) {
                // return  $col[0];

                // $student_details_row = DB::table('student_details')
                //     ->select('id')
                //     ->where('enrollment',$this->enrollment)
                //     ->get();

                // $student_id = $student_details_row[0]->id;
                // echo $student_id;
                // break;


                DB::table('score')->insert(
                    array(
                        'student'   =>  $this->enrollment,
                        'course_code' => $col[0],
                        'asgn1' => $col[1],
                        'lab1' => $col[2],
                        'lab2' => $col[3],
                        'lab3' => $col[4],
                        'lab4' => $col[5],
                        'theory' => $col[6],
                        'status' => (string) $col[7],
                        'total' => $col[8],
                        'program' => $this->program,
                        'name' => $this->foundName
                    )
                );
            }
        }
    }


    public function getScoresFromDatabase(Request $request)
    {
        $enrollment = $request->input('enrollment');
        // $password = $request->input('password');

        $dataWhenIgnouServerNotActive = DB::table('score')
            ->select('score.course_code', 'score.asgn1', 'score.lab1', 'score.lab1', 'score.lab2', 'score.lab3', 'score.lab4', 'score.theory', 'score.status', 'score.total')
            ->join('student_details', 'student_details.id', '=', 'score.student')
            ->where('student_details.enrollment', $enrollment)
            ->get();

        $row = array();
        foreach ($dataWhenIgnouServerNotActive as $d) {
            $col = array();
            $col[0] = $d->course_code;
            $col[1] = $d->asgn1;
            $col[2] = $d->lab1;
            $col[3] = $d->lab2;
            $col[4] = $d->lab3;
            $col[5] = $d->lab4;
            $col[6] = $d->theory;
            $col[7] = $d->status;
            $col[8] = $d->total;
            // $col[8] = $d->total;

            array_push($row, $col);
        }

        return response()->json([
            'scores' => $row
        ]);
    }

    public function getScores(Request $request)
    {
        /*
            this function is responsible for requesting external server too fetch the information
        */
        $client = new Client();
        $foundName = '';
        // echo $program;
        $this->program = $request->input('program');
        $this->enrollment = $request->input('enrollment');
        // echo $request->input('program')."<br>". $request->input('enrollment');
        // exit;



        if (strcmp($this->program, "ASSO") == 0 || strcmp($this->program, "BA") == 0 || strcmp($this->program, "BCOM") == 0 || strcmp($this->program, "BDP") == 0 || strcmp($this->program, "BSC") == 0) {
            $grade_card_url = "https://gradecard.ignou.ac.in/gradecardB/Result.asp";
            // return $this->gradeCardB($request, $grade_card_url, $this->program, $this->enrollment);
        } else if (strcmp($this->program, "BCA") == 0 || strcmp($this->program, "MCA") == 0 || strcmp($this->program, "MP") == 0 || strcmp($this->program, "MPB") == 0 || strcmp($this->program, "PGDHRM") == 0 || strcmp($this->program, "PGDFM") == 0 || strcmp($this->program, "PGDOM") == 0 || strcmp($this->program, "PGDMM") == 0 || strcmp($this->program, "PGDFMP") == 0) {
            $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardM/Result.asp';
        } else {
            $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardR/Result.asp';
            // return $this->gradeCardR($request, $grade_card_url, $this->program, $this->enrollment);
        }

        // $grade_card_url = 'https://gradecard.ignou.ac.in/gradecardM/Result.asp';

        try {
            $response = $client->request('POST', $grade_card_url, [
                'form_params' => [
                    'Program' => $this->program,
                    'eno' => $this->enrollment,
                    'submit' => 'Submit',
                    'hidden_submit' => 'OK'
                ]
            ]);


            $body = $response->getBody()->getContents();

            if ($request->input('download') == '1') {
                return $body;
            }

            // echo $body;
            // exit;
            $dom = new \IvoPetkov\HTML5DOMDocument();
            $dom->loadHTML($body);
            $data = $dom->querySelectorAll('b');
            for ($i = 0; $i < $data->length; $i++) {
                if (strpos($data[$i], "Name") == true) {
                    $foundName = substr($data[$i], 10);
                }
            }
            $this->foundName = trim($foundName, "</b>");

            $items = $dom->getElementsByTagName('tr');

            $row = null;

            switch ($this->program) {
                case 'BCA':
                    $row = bca::getScores($items, $this->program);
                    break;
                
                case 'MEG':
                    # code...
                    $row = meg::getScores($items, $this->program);
                    break;

                case 'MCA':
                    # code...
                    $row = mca::getScores($items, $this->program);
                    break;

                case 'BCOM':
                    # code...
                    $row = bcom::getScores($items, $this->program);
                    break;

                case 'BA':
                    # code...
                    $row = ba::getScores($items, $this->program);
                    break;

                case 'BSC':
                    # code...
                    $row = BSC::getScores($items, $this->program);
                    break;
                
                case 'MCOM':
                    # code...
                    $row = MCOM::getScores($items, $this->program);
                    break;
                
                case 'MPS':
                    # code...
                    $row = MPS::getScores($items, $this->program);
                    break;
                
                default:
                    # code...
                    break;
            }


            $outof = 0;
            $earned_marks = 0;
            for ($i = 1; $i < sizeof($row); $i++) {
                $outof += 100;
                $earned_marks += $row[$i][8];
            }
            // return $outof;
            if (sizeof($row) > 1 && sizeof($row[0]) > 1) {

                try {
                    $check_oldnew = DB::table('score')
                        ->where('student', $this->enrollment)
                        ->where('program', $this->program)
                        ->get(['id'])[0];

                    $this->updateData($row);
                } catch (\Exception $e) {
                    $this->dataSavedIntoScoreTable($row);
                }

                $percent = ($earned_marks / $outof) * 100;
                if($percent > 60){
                    session()->flash('good_score','1');
                }

                return [
                    'scores' => $row,
                    'name' => str_replace('</b>', '', $foundName),
                    'enrollment' => $this->enrollment,
                    'earned_marks' => $earned_marks,
                    'outof' => $outof,
                    'percent' => $percent,
                    'program' => $this->program,
                    'status' => '200',
                    'gradecard' => 'M'
                ];
            } else {

                // echo "No results";
                return [
                    'scores' => $row,
                    'status' => '404',
                ];
            }


        } catch (\Exception $e) {

            return [
                'scores' => 'fail',
                'status' => '500',
            ];
        }
    }

    public function getGradeCard(Request $request)
    {
        try {
            return redirect()->route('scores', [
                'program' => $request->input('program'),
                'enrollment' => $request->input('enrollment')
            ]);
        } catch (\Exception $e) {
            return view('error', [
                'message' => '500 Oops! Server Unavailable'
            ]);
        }
        // print_r($data['scores']);
    }

    public function scores(Request $request)
    {
        // return "wget https://www.apachefriends.org/xampp-files/7.1.10/xampp-linux-x64-7.1.10-0-installer.run";
        $course = $course_list = Notes_Unit::join('notes__courses', function ($j) {
            $j->on('notes__courses.id', '=', 'notes__units.course_id');
        })->join('notes__programs', function ($j) {
            $j->on('notes__courses.program_id', '=', 'notes__programs.id');
        })->where('notes__units.published', '1')->distinct('notes__courses.course_code')->get([
            // 'notes__programs.program_code',
            'notes__courses.course_code',
            'notes__courses.id',
            // 'notes__courses.course_name'
        ]); 
 
        // return $course;
        try {
            $data = $this->getScores($request);
            // return $data;
            if ($data['status'] != "404" && $data['status'] != "500") {
                if ($data['gradecard'] == 'R') {
                    return view('scores_r', [
                        'scores' => $data,
                        'courses' => $course
                    ]);
                } else {
                    return view('scores', [
                        'scores' => $data,
                        'courses' => $course,
                    ]);
                }
            } else if ($data['status'] == "500") {
                return view('error', [
                    'message' => 'Oops! External Server Unavailable 500'
                ]);
            } else {
                return view('error', [
                    'message' => 'Oops! Enrollment Not Found'
                ]);
            }
        } catch (\Exception $e) {

            $data = $this->getDataFromDatabase($request);
            return view('scores_offline', [
                'scores' => $data,
                'courses' => $course,
            ]);

            // return view('error',[
            //     'message'=>'Oops! External Server Unavailable : an exception'
            // ]);
        }
    }

    public function downloadScore(Request $request)
    {

        $html_grade_card = $this->getScores($request);

        // $pdf = PDF::loadView('scores');

        if ($request->view == '1') {
            return $html_grade_card;
        } else {
            $pdf = PDF::loadHTML($html_grade_card);
            return $pdf->download('gradecard2019.pdf');
        }
    }

    public function getDataFromDatabase($request)
    {

        $data = DB::table('score')->where('program', $request->program)->where('student', $request->enrollment)->get();

        // $data = null;
        // return $data;

        return [
            'scores' => $data,
            'name' => $data[0]->name,
            'enrollment' => $data[0]->student,
            'earned_marks' => 00,
            'outof' => 00,
            'percent' => 00,
            'program' => $data[0]->program,
        ];
    }
}
