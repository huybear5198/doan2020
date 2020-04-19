<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['name','type_product','id_user','description','price','image','quantity'];
}
