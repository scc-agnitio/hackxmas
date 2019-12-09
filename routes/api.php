<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/timelines/{member}', 'TimelineController@show');
Route::get('/test/{member}', 'TimelineController@timeline');
