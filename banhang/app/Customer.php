<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //khai báo bảng csdl
    protected $table = "Customer";
    public function bill(){
    	return $this->hasMany('App\Bill','id_customer','id');
    }
}
