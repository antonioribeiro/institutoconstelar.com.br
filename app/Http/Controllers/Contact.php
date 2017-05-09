<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Users;
use Mail;
use App\Http\Requests\ValidateContact;

class Contact extends Controller
{
    /**
     * @var Users
     */
    private $usersRepository;

    public function __construct(Users $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function send(ValidateContact $request)
    {
        $data = $request->all();

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->from(config('app.mail.from.address'), config('app.mail.from.name'));

            $this->usersRepository->getAdmins()->each(function ($admin) use ($message, $data) {
                $message->to($admin->email)->subject('Mensagem de '.$data['name']);
            });
        });
    }
}
