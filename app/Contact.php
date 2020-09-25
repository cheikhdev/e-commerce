<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public $fillable = ['nom', 'email', 'prenom', 'message'];
}
