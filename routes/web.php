<?php

Route::get('/', ['as' => 'home', 'uses' => 'Home@index']);

Route::get('/constelacoes', ['as' => 'constelacoes', 'uses' => 'Home@constelacoes']);

Route::get('/gestalt', ['as' => 'gestalt', 'uses' => 'Home@gestalt']);

