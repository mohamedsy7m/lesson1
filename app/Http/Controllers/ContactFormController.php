<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //


    public function create()
    {

        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|',
        ]);

        //dd(request()->all());

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message','success');
    }
}
