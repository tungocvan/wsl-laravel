<?php 
 use Illuminate\Support\Facades\Route;
 use Modules\Users\src\Http\Controllers\UserController;
 
 Route::get('/', function () {
    return view('welcome');
});

 Route::get('/user', [UserController::class,'index']);
