<?php

namespace App\Services\Newsletter;

use App\Data\Entities\Newsletter as Model;

class Service
{
    public function register($email)
    {
        Model::register($email);
    }
}
