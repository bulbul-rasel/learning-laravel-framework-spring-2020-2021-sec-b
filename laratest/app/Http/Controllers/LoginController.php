<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(){
      
        return view('login.index');
    }

    public function verify(Request $req){
      

       if($req->useremail == "" ||  $req->password == ""){
           $req->session()->flash('msg','Null Email and Password...!');
           return redirect('/login');

       }elseif($req->useremail == $req->password){
           $req->session()->put('username',$req->useremail);
           return redirect('/home');
       }else{
           $req->session()->flash('msg','Invaild Useremail and Password...!');
        return redirect('/login');
       }

    }
}
