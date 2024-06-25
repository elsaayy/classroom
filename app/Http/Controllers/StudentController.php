<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($id)
    {
        $students = User::where('class_id', $id)->get();
        $teacher = Classes::where('id', $id)->first();

        // return $teacher;

        return view('students.index', ['students' => $students, 'teacher' => $teacher]);
    }
}
