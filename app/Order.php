<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function delivery(){
        return $this->belongsTo("App\Delivery");
    }
    public function administrator(){
        return $this->belongsTo("App\Administrator");
    }
}
