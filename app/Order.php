<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];
    public function Delivery(){
        return $this->belongsTo("App\Delivery");
    }
     public function Administrator(){
          return $this->belongsTo("App\Administrator");
     }
     public Function Order(){
         return $this->belongsToMany("App\Order");

     }
     public Function products(){
         return $this->belongsToMany("App\Product",'Order_Product','');

     }
     
    }
