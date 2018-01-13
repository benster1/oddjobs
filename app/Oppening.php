<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oppening extends Model
{
    //
	 public $table='oppenings';

     public  function users(){
        return $this->belongsToMany('App\User');

    }
}
