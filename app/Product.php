<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "products";
    protected $fillable = ['name','type_product','id_user','description','price','image','quantity','city','district','sub_district','street'];
}
