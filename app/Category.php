<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function countries(){
  return $this->belongsToMany('App\Country');

}
}
