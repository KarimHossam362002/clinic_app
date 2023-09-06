<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MajorController extends Controller
{
    // Display majors
   function index(){
    $majors = Major::get();
    // $majors = Major::paginate(5);
    return view('admin.major.index',compact('majors'));
    // dd(view('major.index',compact('majors'))->render());
   }
   public function getData()
    {
        $majorsData = Major::get();
        return view('home.index' ,compact('majorsData'));
    }

   // Delete from majors
   function destroy($id){
    // dd($id);
    $major=Major::find($id);
    $major->delete();
    return redirect('/majordisplay');
   }
   // Update majors
   function edit($id){

    $major=Major::find($id);
    return view('admin.major.update',['major' =>$major]);
   }
//    type hinting
   function update($id,Request $request){
    $major = Major::find($id);
    // dd($major);
    // $major->update(['title'=> $request->majorTitle]);
    // $major->title = $request->majorTitle;
    // $major->save();
    $data = $request->all();
    Validator::make($data,[
        'majorTitle'=>['required','string','min:2','max:20']
    ])->validate();
    Major::where('id',$id)->update(['title'=>$data['majorTitle']]);
    return redirect()->route('major.index');
        // dd($request->all());
   }
   function create(){
    return view('admin.major.create');
   }
   function store(Request $request){
    $data = $request->all();
    Validator::make($data,[
        'title' =>['required', 'string' ,'min:2', 'max:20']
    ])->validate();
        $data = Major::create(['title'=>$request->majorTitle]);
       return redirect()->route('major.index');
    }

}
