<?php

namespace App\Services\Newsletter;

use Session;
use MailChimp;
use App\Data\Repositories\Users;
use App\Data\Entities\Newsletter as Model;
use App\Notifications\NewletterSubscription;

class Service
{
    /**
     * @var Users
     */
    private $usersRepository;

    public function __construct(Users $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    private function notifyAdmins($registered)
    {
        $this->usersRepository->getAdmins()->each(function($admin) use ($registered) {
            $admin->notify(new NewletterSubscription($registered));
        });
    }

    public function register($email)
    {
        $registered = Model::register($email);

        MailChimp::subscribe($email);

        Session::put('newsletter', [
            'email' => $email,
            'registered' => true,
        ]);

        $this->notifyAdmins($registered);

        return true;
    }
}
