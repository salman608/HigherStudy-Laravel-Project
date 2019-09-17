<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Studentapplication extends Model
{
    public function agency($id)
    {
      $details = DB::table('agencyprofiles')->where('id',$id)->first();
      return $details;
    }
}
