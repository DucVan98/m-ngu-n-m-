<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
	//khai báo bảng csdl
    protected $table = "type_products";
    //thể hiện mối quan hệ giữa bảng product và bàng producttype quan hệ 1 nhiều
    public function product(){
    	return $this->hasMany('App\Produuct','id_type','id');
    }
}
