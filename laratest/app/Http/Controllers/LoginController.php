<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){
       // return view('login.test');
       //echo "Posted...!";
       //echo $req -> username. "<br>";
       //echo $req -> password;

       if($req->username == "" ||  $req->password == ""){
           echo "Null Submission...!";

       }elseif($req->username == $req->password){
           //echo "Valid User...";
           return redirect('/home');
       }else{
        return redirect('/login');
       }

    }
}