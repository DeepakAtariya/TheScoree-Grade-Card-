<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MCOM extends Model{

    public static function getScores($items, $program){
        $row = array();

        $r_i = 0;

        $course_data = DB::table('course')
            // ->where('program', $program)
            ->get();
        // echo $course_data[1]->code;
        // echo sizeof($course_data);

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
                    $assgn = ((int) $col[$j] / 100) * 30;
                    // break;
                }
                if ($j == 2 && $col[$j] != "-") {
                    //lab1 marks
                    $lab1 = ((int) $col[$j] / 100) * 70;
                    // break;
                }
                if ($j == 3 && $col[$j] != "-") {
                    // lab2 marks
                    $lab2 = ((int) $col[$j] / 100) * 70;
                    // break;
                }
                if ($j == 4 && $col[$j] != "-") {
                    // lab3 marks
                    $lab3 = ((int) $col[$j] / 100) * 70;
                    // break;
                }
                if ($j == 5 && $col[$j] != "-") {
                    //lab 4
                    $lab4 = ((int) $col[$j] / 100) * 70;
                    // break;
                }
                if ($j == 6 && $col[$j] != "-") {
                    // theory
                    $theory = ((int) $col[$j] / 100) * 70;
                    // break;
                }
            }

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
            array_push($col, floor($assgn + $theory + $lab_marks));
            if (sizeof($course_data) > 0) {
                $flag = false;
                // echo $col[0];
                // for ($c = 0; $c<sizeof($course_data); $c++) {
                foreach ($course_data as $course) {
                    // echo $course->code;
                    if (strcmp($col[0], $course->code) == 0) {
                        // echo $col[0];
                        array_push($col, $course->name);
                        break;
                    } else {
                        $flag = true;
                    }
                }
                if ($flag) {
                    array_push($col, "Unknown");
                }
            } else {
                array_push($col, "Unknown");
            }

            $row[$r_i] = $col;
            $r_i++;
        }
        return $row; 
    }
}
