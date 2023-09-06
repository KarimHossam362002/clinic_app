<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactMessages = ContactUs::get();
        return view('admin.contact_us.index' ,compact('contactMessages'));
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
        ContactUs::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'phone' =>$request->phone,
            'message' =>$request->message,

        ]);
        return back()->with('success', 'Message added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        ContactUs::where('id', $id)->delete();
        return redirect()->route('contact_us.index');
    }
}
