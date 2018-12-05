<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public function bill(){
        return $this->hasMany('App\BIll','id_customer ','id');
    }
    public $timestamps = false;
}
