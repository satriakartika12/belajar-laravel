<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function index()
    {
        $student = student::get();
        return view('students', ['studentlist' => $student]);

    }
   
    public function show($id)
    {
        $student = student::with(['kelas.homeroomteachers','ekstrakulikulers'])->findorfail($id);
        return view('student-detail', ['student' => $student]);
    }
}
