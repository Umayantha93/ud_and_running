<?php

use App\Models\Greeting;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create-greeting', function () {
    $greeting = new Greeting();

    $greeting->body = 'Hello World';
    $greeting->save();
});

Route::get('first-greeting', function () {
    return Greeting::first()->body;
});
