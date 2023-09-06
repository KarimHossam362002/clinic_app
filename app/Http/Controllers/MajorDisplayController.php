<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorDisplayController extends Controller
{
    function index(){
        $majorsData = Major::get();
        $doctorsData = Doctor::get();
        return view('majors.index',compact('majorsData','doctorsData'));
    }
}
