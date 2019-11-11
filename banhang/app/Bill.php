<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //khai báo bảng csdl
    protected $table = "bills";
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_bill','id');
    }
    public function bill(){
    	return $this->hasMany('App\Customer','id_customer','id');
    }
}
