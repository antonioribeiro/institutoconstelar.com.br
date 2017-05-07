<?php

namespace App\Data\Entities;

class Newsletter extends Eloquent
{
    private function findByEmail($email)
    {
        return static::where('email', $email)->first();
    }

    public static function register($email)
    {
        $model = new static();

        if (! is_null($registered = $model->findByEmail($email))) {
            return $registered;
        }

        return $model->registerEmail($email);
    }

    private function registerEmail($email)
    {
        return $this->create(['email' => $email]);
    }
}
