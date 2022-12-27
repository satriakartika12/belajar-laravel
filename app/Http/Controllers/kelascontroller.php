<?php

namespace App\Http\Controllers;

use App\Models\kelasroom;

class kelascontroller extends Controller
{
    public function index()
    {
        $kelas = kelasroom::get();
        return view('kelasroom', ['kelaslist' => $kelas]);
    }
}
