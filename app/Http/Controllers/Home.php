<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function gestalt()
    {
        return view('home.gestalt', ['showAll' => true]);
    }

    public function constelacoes()
    {
        return view('home.constelacoes', ['showAll' => true]);
    }
}
