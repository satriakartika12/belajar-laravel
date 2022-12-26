<?php

namespace App\Http\Controllers;

use App\Models\student;

class studentcontroller extends Controller
{
    public function index()
    {
        $student = student::with('kelas')->get();
        return view('students', ['studentlist' => $student]);

    }
}
