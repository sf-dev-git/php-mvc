<?php
include 'Route.php';

Route::get('/', 'Controller@index');
Route::post('/post', 'Controller@post');

Route::run();