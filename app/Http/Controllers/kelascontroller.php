<?php

namespace App\Http\Controllers;

use App\Models\kelasroom;

class kelascontroller extends Controller
{
    public function index()
    {
        $kelas = kelasroom::with('students', 'homeroomteachers')->get();
        return view('kelasroom', ['kelaslist' => $kelas]);
    }
}
