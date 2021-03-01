<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    protected $fillable=['fname','uname','email','pass','cpass','address','cname','phn','city','country'];
}
