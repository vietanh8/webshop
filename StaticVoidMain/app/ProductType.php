<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "products_type";
    public function products(){
        return $this->hasMany('App\Products','id_type','id');
    }
    public $timestamps = false;
}
