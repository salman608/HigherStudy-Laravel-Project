<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;


class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::latest()->get();
       return view('admin.contact.index',compact('contacts'));
    }

    public function destory($contact){
        $contact=Contact::findOrFail($contact);
        $contact->delete();
        Toastr::success('Message successfully Deleted','success');
        return redirect()->back();
      }
}
