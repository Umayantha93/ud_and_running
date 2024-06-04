<?php

use App\Http\Controllers\TaskController;
use App\Models\Greeting;
use Illuminate\Support\Facades\Route;

Route::get('/dssfdsf', function () {
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

Route::get('users/{id}', function ($id) {
})->where('id', '[0-9]+');


Route::view('/users', 'welcome');

Route::view('/', 'users', ['User' => 'Micheal']);


Route::get('tasks', [TaskController::class, 'index']);