<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class DoctorDisplayController extends Controller
{
    function index($id){
        $doctorsData = Doctor::
        where('major_id',$id)
        ->paginate(4);
        // $majorsData = Major::get();
        // $doctorsData = Doctor::paginate(4);
        return view('doctors.index',compact('doctorsData'));
    }
}
