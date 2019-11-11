<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //khai báo bảng csdl
    protected $table = "products";
    // thể hiện mối quan hệ của bảng product vs producttype quan hệ 1-1
    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type','id');
    }
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_product','id');
    }
}
