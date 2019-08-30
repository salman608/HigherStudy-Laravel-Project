<?php

namespace App\Http\Controllers;
use App\Contact;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ContactController extends Controller
{

  


  public function add(Request $get){

    $insert = Contact::insert([
        "name"=>$get->name,
        "email"=>$get->email,
        "phone"=>$get->phone,
        "description"=>$get->description,
        "created_at"=> Carbon::now()
        ]);

        if($insert){
            return response()->json("success");
        }else{
            return response()->json("error");
        }

  }
}
