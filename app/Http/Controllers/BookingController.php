<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::get();
        $bookings = Booking::paginate(5);
        return view('admin.booking.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required'
        // ]);

        Doctor::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'doctor_id' => $request->doctor_id
        ]);
        return back()->with('success', 'Booking added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {

        return view('admin.booking.show', compact('booking'));

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

        Booking::where('id', $id)->delete();
        return redirect()->route('bookings.index');
    }
}
