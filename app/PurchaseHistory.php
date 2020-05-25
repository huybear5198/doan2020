<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    public $table = "purchase_history";
    protected $fillable = ['seller','buyer','product_id','quantity','status'];
}
