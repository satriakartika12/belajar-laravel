<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class teachercontroller extends Controller
{
    public function index()
    {
        $teacher = teacher::all();
        return view('teacher', ['teacherlist' => $teacher]);

    }
}
