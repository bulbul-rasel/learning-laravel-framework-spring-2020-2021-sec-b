<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index( Requesr $req){
        $req->session()->flash();
        return redirect('/login');
    }
}
