<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    public $table = "type_products";
    protected $fillable = ['name','description'];
}
