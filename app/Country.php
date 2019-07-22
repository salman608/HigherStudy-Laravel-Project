<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public function categories(){
   return $this->belongsToMany('App\Category');

 }

 public function universities(){
      return $this->belongsToMany('App\University');

    }

}
