<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencyprofile extends Model
{
    protected $guarded =[];
    protected $table ='agencyprofiles';

    public function user(){

    	return $this->belongsTo('App\User');
    }
}
