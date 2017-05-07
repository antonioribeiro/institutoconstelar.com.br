<?php

namespace App\Http\Controllers;

class Newsletter extends Controller
{
    public function register()
    {
        return [
            'registered' => Newsletter::register(request()->get('email')),
        ];
    }
}
