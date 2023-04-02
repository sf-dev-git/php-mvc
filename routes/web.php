<?php
include 'Route.php';

Route::get('/', 'Controller@index');
Route::get('/user/:username', 'Controller@show');
Route::post('/post', 'Controller@post');

Route::run();