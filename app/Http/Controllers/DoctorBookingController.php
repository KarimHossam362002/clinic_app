<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorBookingController extends Controller
{
    function index($id){
        $doctorsData = Doctor::
        where('id',$id)
        ->first();
        return view('doctors.doctor',compact('doctorsData'));

    }
}
