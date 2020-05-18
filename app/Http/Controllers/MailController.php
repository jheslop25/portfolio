<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $to_name = 'John Heslop';
        $to_email = 'johnheslop24@gmail.com';
        $data = array('name' => $request->name, 'body' => $request->body);
        $sender_email = $request->sender_email;

        Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email)  {
            $message->to($to_email, $to_name)
            ->subject('Laravel Test Mail');
        });
    }
}
