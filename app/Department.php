<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{


  public function universities(){
       return $this->belongsToMany('App\University','university_department')->withPivot('department_id', 'university_id');
}





}
