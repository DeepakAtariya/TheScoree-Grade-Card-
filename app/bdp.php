<?php
use Illuminate\Support\Facades\DB;
use PDF;

namespace App;

use Illuminate\Database\Eloquent\Model;

class bdp extends Model{

    public static function getScores($items){
        $row = array();

        $r_i = 0;

        $course_data = DB::table('course')
            ->where('program', $this->program)
            ->get();

        // return $course_data[1]->name;

        $c = -1;
        $data = 0;
        foreach ($items as $node) {
            $course_name = array();
            $cn = $node->childNodes;
            $col = array();
            $i = 0;
            foreach ($cn as $v) {
                $col[$i] = strip_tags((string) $v);
                $i++;
            }
            $assgn = 0;
            $theory = $lab1 = $lab2 = $lab3 = $lab4 = 0;
            for ($j = 0; $j < sizeof($col); $j++) {

                if ($j == 1 && $col[$j] != "-") {
                    // assignment marks
                    $assgn = ((int) $col[$j] / 100) * 25;
                    // break;
                }
                if ($j == 2 && $col[$j] != "-") {
                    //lab1 marks
                    $lab1 = ((int) $col[$j] / 100) * 75;
                    // break;
                }
                if ($j == 3 && $col[$j] != "-") {
                    // lab2 marks
                    $lab2 = ((int) $col[$j] / 100) * 75;
                    // break;
                }
                if ($j == 4 && $col[$j] != "-") {
                    // lab3 marks
                    $lab3 = ((int) $col[$j] / 100) * 75;
                    // break;
                }
                if ($j == 5 && $col[$j] != "-") {
                    //lab 4
                    $lab4 = ((int) $col[$j] / 100) * 75;
                    // break;
                }
                if ($j == 6 && $col[$j] != "-") {
                    // theory
                    $theory = ((int) $col[$j] / 100) * 75;
                    // break;
                }
            }

            // if(strcmp($col[0],"MCSL036")==0){

            //     // return "assign -".$assgn." lab1 -".$lab1."lab2 - ".$lab2."lab3 - ".$lab3."lab4 - ".$lab4."theory - ".$theory;
            //     $lab_marks = $lab1+$lab2+$lab3+$lab4;

            //     return $assgn+$theory+$lab_marks;
            // }
            // if(strcmp($col[0],"BCSP064")!=0){
            //     $lab_marks = (($lab1+$lab2+$lab3)/300)*100;
            // }else{
            // $lab_marks = $lab1+$lab2+$lab3+$lab4;
            // }


            if ($lab1 != 0 && $lab2 != 0 && $lab3 != 0 && $lab4 != 0) {
                $lab_marks = (($lab1 + $lab2 + $lab3 + $lab4) / 400) * 100;
            } else if ($lab1 != 0 && $lab2 != 0 && $lab3 != 0) {
                $lab_marks = (($lab1 + $lab2 + $lab3) / 300) * 100;
            } else if ($lab1 != 0 && $lab2 != 0) {
                $lab_marks = (($lab1 + $lab2) / 200) * 100;
            } else if ($lab1 != 0) {
                $lab_marks = (($lab1) / 100) * 100;
            } else {
                $lab_marks = $lab1 + $lab2 + $lab3 + $lab4;
            }

            if (strcmp($col[0], "BCSP064") == 0) {
                $project_marks = ((int) $col[2] / 100) * 150;
                $project_viva = ((int) $col[3] / 100) * 50;
                $project_marks_in_hun = ($project_marks + $project_viva) / 2;
                $lab_marks  = $project_marks_in_hun;
            }
            if (strcmp($col[0], "MCS044") == 0) {
                $project_marks = ((int) $col[5] / 100) * 50;
                $project_viva = ((int) $col[6] / 100) * 25;
                // $project_marks_in_hun = ($project_marks + $project_viva)/2;
                $lab_marks  = $project_marks + $project_viva;
                $theory = 0;
            }


            array_push($col, floor($assgn + $theory + $lab_marks));
            if (sizeof($course_data) > 0) {
                for ($c = 0; $c < sizeof($course_data); $c++) {
                    if ($col[0] == $course_data[$c]->code) {
                        array_push($col, $course_data[$c]->name);
                        break;
                    } else {
                        array_push($col, "Unknown");
                        break;
                    }
                }
            } else {
                array_push($col, "Unknown");
            }


            // if($c>0 && $c<=39){
            //     array_push($col,$course_data[$data]->name);
            //     $data++;
            // }

            $row[$r_i] = $col;
            $r_i++;
        }
    }

}
