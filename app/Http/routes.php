<?php

Route::group(['middleware' => ['web']], function ()
{
    Route::get('/', ['as' => 'home', 'uses' => 'Home@index']);

    Route::post('contact', ['as' => 'contact', 'uses' => 'Contact@send']);
});
