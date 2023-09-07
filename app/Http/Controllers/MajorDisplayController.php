<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorDisplayController extends Controller
{
    function index(){
        $majorsData = Major::paginate(4);
        $doctorsData = Doctor::get();
        return view('majors.index',compact('majorsData','doctorsData'));
    }
}
