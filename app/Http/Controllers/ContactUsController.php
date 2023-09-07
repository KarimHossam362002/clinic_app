<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
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
        $contactMessages = ContactUs::paginate(5);
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
    public function store(ContactUsRequest $request)
    {
        ContactUs::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'phone' =>$request->phone,
            'message' =>$request->message,

        ]);
        return back()->with('success', 'Message sent successfully :D');

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
    public function destroy(ContactUs $contact_u)
    {
        $contact_u->delete();
        return redirect()->route('contact_us.index')->with('success','Data deleted successfully');
    }
}
