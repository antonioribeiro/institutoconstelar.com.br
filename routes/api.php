<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1', 'middleware' > 'web'], function () {
    Route::post('/newsletter/register', ['as' => 'api.newsletter.register', 'uses' => 'Newsletter@register']);
});
