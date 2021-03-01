<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        $reg=Products::orderBy('id','desc')->get();
        return view('admin.registration.create',compact('reg'));
    }
    public function store(Request $request)
    {
        $data = $request-> all();
        Registration::create($data);
        return back()->with('success','Data inserted Successfully');
    }
}
