<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscribe;
use App\Contact;

class ContactController extends Controller
{
    //store method for newsletter
    public function email_subcribe_store()
    {
      $data = Suscribe::create($this->Validate_email_subcribe());
      // dd($data);
       return redirect('/')->with('message','Thanks for subscribe for our newsletter');
    }

    //validate newsletter
    public function Validate_email_subcribe()
    {
      return request()-> validate([
        'email_subcribe' => ['required','string','max:255'],
      ]);
    }


    //store method contact_us_customer
    public function contact_us_customer_store()
    {
      $data = Contact::create($this->contact_us_customer());
       // dd($data);
       return redirect()->back()->with('message','Thanks for Choosing Entel, We have receive your email, we will get in-touch soon!');
    }


    //validate contact_us_customer
    public function contact_us_customer()
    {
      return request()-> validate([
        'name' => ['required','string','max:255'],
        'email' => ['required','string','max:255'],
        'service' => '',
        'phone' => ['required','string','max:255'],
        'message' => ['required','string','max:255'],

      ]);
    }
}
