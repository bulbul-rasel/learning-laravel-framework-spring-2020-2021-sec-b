<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=['name','productId','type'];
    public $timestamps = false;
    protected $primaryKey = 'id';

}
