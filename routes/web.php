<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DatabaseController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// Route::get('/about/{name}', function ($name) {  //add dynameic route
//     return view('about',['name'=>$name]);
// });

// Route::view('/about/{name}','about',['name'=>$name]);

// Route::get('about',[UserController::class,'about']);
Route::get('user/{name}',[UserController::class,'getUsername']);

Route::view('/user-form','form-submission');

Route::post('addUser',[FormController::class,'addUser']);

Route::get('database',[DatabaseController::class,'database']);