<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        DB::statement("SET SQL_MODE = ''");
        $rates = DB::table('rates')
        ->join('doctors','doctors.id','=','rates.doctor_id')
        ->join('majors','majors.id','=','doctors.major_id')
        ->select('rates.*','majors.title AS major_title','doctors.name AS doctor_name',DB::raw('SUM(rate) AS sumOfRate'))
        ->orderByDesc('sumOfRate')
        ->groupBy('doctor_name')
        ->get();
        return view('admin.rate.index' ,compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view(('admin.rate.show'), compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rate::where('id', $id)->delete();
        return redirect()->route('rates.index');


    }
}
