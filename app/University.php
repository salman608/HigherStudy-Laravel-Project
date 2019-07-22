<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
  public function countries(){
  return $this->belongsToMany('App\Country');
}


public function  departments(){
  return $this->belongsToMany('App\Department','university_department');
}




}
