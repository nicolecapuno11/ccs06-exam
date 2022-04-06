<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function begin()
    {
        return view('begin');
    }

    public function enterGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageScore($midterm, $final)
    {
        $average = ($midterm + $final) / 2;
        return round($average, 2);
    }

    public function computeGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        $s1_average = $this->computeAverageScore($request->s1_midterm, $request->s1_final);
        $s2_average = $this->computeAverageScore($request->s2_midterm, $request->s2_final);
        $s3_average = $this->computeAverageScore($request->s3_midterm, $request->s3_final);
        $s4_average = $this->computeAverageScore($request->s4_midterm, $request->s4_final);
        $s5_average = $this->computeAverageScore($request->s5_midterm, $request->s5_final);

        return view('gradesAverage', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // Student 1 Grades
            's1_midterm' => $request->s1_midterm,
            's1_final' => $request->s1_final,
            's1_average' => $s1_average,
            
            // Student 2 Grades
            's2_midterm' => $request->s2_midterm,
            's2_final' => $request->s2_final,
            's2_average' => $s2_average,
            // Student 3 Grades
            's3_midterm' => $request->s3_midterm,
            's3_final' => $request->s3_final,
            's3_average' => $s3_average,
            // Student 4 Grades
            's4_midterm' => $request->s4_midterm,
            's4_final' => $request->s4_final,
            's4_average' => $s4_average,
            // Student 5 Grades
            's5_midterm' => $request->s5_midterm,
            's5_final' => $request->s5_final,
            's5_average' => $s5_average,
        ]);
    }
}
