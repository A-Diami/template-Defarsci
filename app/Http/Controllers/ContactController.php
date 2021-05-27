<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('template.contact');
    }

    public function sendEmail(Request $request){
        $details =[
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'sujet' => $request->sujet,
            'message' => $request->message,
        ];
        Mail::to('rose.dieng.lab@gmail.com')->send(new ContactEmail($details));
        return back()->with('success','Merci de nous avoir contacté!!!');
    }
}
