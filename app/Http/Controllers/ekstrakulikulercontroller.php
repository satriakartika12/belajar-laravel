<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekstrakulikuler;
use App\Models\student;


class ekstrakulikulercontroller extends Controller
{
    public function index(){

    $ekskul = ekstrakulikuler::get();
        return view('ekstrakulikuler', ['ekskullist' => $ekskul]);
    }
}
