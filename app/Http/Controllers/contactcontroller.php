<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\all;
use App\mail\sendmail;
use Symfony\Component\Console\Input\Input;

class contactcontroller extends Controller
{

    public function submit(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required',
            'subject' => 'required',
        ]);

        // create career
        $contact = new contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->subject = $request->input('subject');
        // save career

        
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        );
        
        if (contact::where('email', '=', $request->input('email'))->exists()) {
            Mail::to('matthew@southseashipyard.com')->send(new sendmail($data));
        }
        
        Mail::to('matthew@southseashipyard.com')->send(new sendmail($data));
        $contact->save();

        return redirect('/contact')->with('status', 'Message Sent');
    }
}
