<?php

use App\Http\Controllers\Auth\LoginControllerller;
use App\Http\Controllers\Auth\LogoutControllerller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardControllerller;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardControllerller::class,'index'])->name('dashboard');


Route::get('/login',[LoginControllerller::class,'index'])->name('login');
Route::post('/login',[LoginControllerller::class,'store']);

Route::get('/logout',[LogoutControllerller::class,'store'])->name('logout');


Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);


Route::get('/posts', function () { 
    return view('posts.index');
});
