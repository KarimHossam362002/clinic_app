<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::get();
        // $doctors = Doctor::with('major') select('doctors.*,'majors.title as major_title')
        // ->join('majors','doctors.major_id','=','majors.id')
        // ->where('majors.title','Prof.')
        // ->get();
        //filter doctors by major title
        // Doctor::whereHas('major',function($q){
        //     $q->where('title','Prof.')->get();
        // });
        $doctors = Doctor::paginate(5);
        return view('admin.doctor.index', compact('doctors'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::get();
        return view('admin.doctor.create', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {
       $request->validate(['image'=>'sometimes']);
        $ext = $request->image->extension();
        $newName = time() . rand(0, mt_getrandmax()) . '.' . $ext;
        $request->image->move(public_path('assets/images/doctors'), $newName);

        Doctor::create([
            'name' => $request['name'],
            'city' => $request['city'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'image' => $newName,
            'major_id' => $request->major_id
        ]);
        return back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {

        return view('admin.doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $majors = Major::get();
        return view('admin.doctor.edit', compact('doctor', 'majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $request->validate([
            'image' => 'sometimes',

            'email' => 'unique:doctors,email,' . $doctor->id,


        ]);
        if($request->hasFile('image')){

            $ext = $request->image->extension();
            $newName = time() . rand(0, mt_getrandmax()) . '.' . $ext;
            $request->image->move(public_path('assets/images/doctors'), $newName);
        }
        $doctor->update([
            'name' => $request['name'],
            'city' => $request['city'],
            'email' => $request['email'],
            // 'password'=> Hash::make($request['password']),
            'image' => $newName ?? $request->image,
            'major_id' => $request->major_id
        ]);
        return back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Doctor::where('id', $id)->delete();
        return redirect()->route('doctors.index')->with('success','Data deleted successfully');
    }
}
