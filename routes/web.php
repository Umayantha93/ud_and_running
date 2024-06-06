<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('users/{id}', function ($id) {
})->where('id', '[0-9]+');


Route::view('/users', 'welcome');

Route::view('/users', 'users', ['User' => 'Micheal']);


Route::get('tasks', [TaskController::class, 'index']);
Route::post('task', [TaskController::class, 'store']);
Route::post('hello', function () {
    return "Hello";
});

Route::get('users', [UserController::class, 'index'])->name('all.users');
Route::get('users/{id}', [UserController::class, 'show'])->name('one.user');


Route::middleware('auth')->group(function() {
    Route::get('dashboard', function() {
        return 'Dashboard';
    });
});
