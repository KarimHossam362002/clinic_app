<?php

namespace App\Http\Controllers;

use App\Http\Requests\MajorRequest;
use App\Models\Major;


class MajorController extends Controller
{
    // Display majors
   function index(){
    // $majors = Major::get();
    $majors = Major::select('id','title','created_at','updated_at')->paginate(5);
    return view('admin.major.index',compact('majors'));
    // dd(view('major.index',compact('majors'))->render());
   }


   // Delete from majors
   function destroy($id){
    // dd($id);
    $major=Major::find($id);
    $major->delete();
    return redirect('/majordisplay')->with('success','Data deleted successfully');
   }
   // Update majors
   function edit($id){

    $major=Major::find($id);
    return view('admin.major.update',['major' =>$major]);
   }
//    type hinting
   function update($id,MajorRequest $request){
    $data = Major::find($id);
    // dd($major);
    // $major->update(['title'=> $request->majorTitle]);
    // $major->title = $request->majorTitle;
    // $major->save();
    $data = $request->all();

    Major::where('id',$id)->update(['title'=>$data['majorTitle']]);
    return back()->with('success','Data updated successfully');
        // dd($request->all());
   }
   function create(){
    return view('admin.major.create');
   }
   function store(MajorRequest $request){

        Major::create(['title'=>$request->majorTitle]);
       return back()->with('success','Data added successfully');
    }

}
