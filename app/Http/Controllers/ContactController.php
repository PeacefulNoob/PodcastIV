<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;
class ContactController extends Controller
{
    public function create()
    {
        return view('site.contact');
    }

    public function store(Request $request)
    {
 
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $data['name'] = $request->name;
        $data['subject'] = $request->subject;
        $data['messageT'] = $request->message;
        $data['email'] = $request->email;

        Mail::send('email.contact_message', $data, function ($message) use ($request) {

            $message->to('igorivladopodcast@gmail.com', 'Receiver Name')
                ->from($request->email, $request->fname)
                ->subject('Podcast');
        });



        return redirect()->back()->with('contact', 'Uspješno ste poslali poruku! ');
    }
}
