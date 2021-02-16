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
           $req->session()->flash('msg','Null Username and Password...!');
           return redirect('/login');

       }elseif($req->username == $req->password){
           //echo "Valid User...";
           $req->session()->put('username',$req->username);
           return redirect('/home');
       }else{
           $req->session()->flash('msg','Invaild Username and Password...!');
        return redirect('/login');
       }

    }
}
