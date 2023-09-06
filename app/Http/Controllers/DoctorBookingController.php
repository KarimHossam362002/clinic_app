<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorBookingController extends Controller
{
    function index(){
        $doctorsData = Doctor::get();
        return view('doctors.doctor',compact('doctorsData'));
    }
}
