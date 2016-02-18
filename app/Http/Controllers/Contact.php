<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\Contact as ContactRequest;

class Contact extends Controller
{
    public function send(ContactRequest $request)
    {
        $data = $request->all();

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));

            foreach (explode(',', env('MAIL_TO_INTERNAL')) as $name)
            {
                $message->to($name, env('MAIL_FROM_NAME'))->subject('Mensagem de '.$data['name']);
            }
        });
    }
}
