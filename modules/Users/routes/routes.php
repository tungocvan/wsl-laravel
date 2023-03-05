<?php 
 use Illuminate\Support\Facades\Route;
 use Modules\Users\src\Http\Controllers\UserController;
 
 Route::get('/', function () {
    return view('home-page');
 });

 Route::get('/user', [UserController::class,'index']);
