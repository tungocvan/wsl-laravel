<?php 
 use Illuminate\Support\Facades\Route;
 use Modules\Users\src\Http\Controllers\UserController;
 
 Route::get('/user', [UserController::class,'index']);
