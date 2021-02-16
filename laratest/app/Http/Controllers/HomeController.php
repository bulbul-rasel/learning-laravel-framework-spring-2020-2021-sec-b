<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){

        $name = 'Bulbul';
        $id = '357';
        //return view('login.index');
        //echo "Welcome Home...!";

    //return view('home.index', ['name' => 'Badol']);
    //return view('home.index')->with('name',"Konok")
    //->with('id',"159");
    //return view('home.index')->withName($name)
    //->withId($id);
    if($req->session()->has('username')){
        return view('home.index', compact('name','id'));
    }else{
        $req->session()->flash('msg','Invalid Request Login first..!');
        return redirect('/login');
    }
    
    }

    public function create(){
        return view('home.create');
    }
    public function store(Request $req){
        //return redirect('/home/userlist');
        echo $req->username;
    }
    public function edit($id){
        /*
        $userlist = $this->getUserlist();
        $user = [];

        foreach($userlist as $u){
            if($u['id']==$id){
                $user = $u;
                break;
            }
        }
        */
        $user = ['id'=>2, 'username'=>'Raton','email'=>'rasel@gmail.com', 'password'=>'456'];
        return view('home.edit')->with('user',$user);
    }
    public function update($id, Request $req){

        //$user = ['id'=>$id, 'username' => $req->name, 'email' => $req->email, 'password' => $req->password];

        return redirect('home/userlist');
    }

    public function userlist(){

        $userlist = [
            ['id'=>1, 'name'=>'Bulbul','email'=>'bulbul@gmail.com', 'password'=>'123'],
            ['id'=>2, 'name'=>'Rasel','email'=>'rasel@gmail.com', 'password'=>'456'],
            ['id'=>2, 'name'=>'Saniul','email'=>'saniul@gmail.com', 'password'=>'789']
        ];

    return view('home.list')->with('list', $userlist);
    }

}
