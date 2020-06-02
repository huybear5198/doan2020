<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoyalCustomer extends Model
{
    public $table = "loyal_customers";
    protected $fillable = ['user_id','level'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
