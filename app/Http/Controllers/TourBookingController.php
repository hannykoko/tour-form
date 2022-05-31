<?php

namespace App\Http\Controllers;

use App\Http\Requests\tourRequest;
use Illuminate\Http\Request;

class TourBookingController extends Controller
{
    public function index()
    {
        return view('tour-index');
    }

    public function save(tourRequest $request)
    {
        // return view('tour-show');
        // $file = $request->file('file');
        // // Log::info($file);
        // $name = $request->file->getClientOriginalName();
        // // Log::info($name);
        // $content =file_get_contents($request->file);
        // //Log::info($content);
        // $upload = $request->file('image')->storeAs('public',$name);
        $data=$request->all();
        $file=$data['file'];
        $file->storeAs('public/',$file->getClientOriginalName());
        $data['file']=$file->getClientOriginalName();
        $data['ext']=$file->extension();
        return redirect()->route("tour-show",$data)->with("message","Records have been created");
    }

    public function show()
    {
       return view('tour-show',request()->all());
    }
}