<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;




Route::get('/',[UserAuthController::class, 'welcome'])->name('welcome');
Route::get('about',[UserAuthController::class, 'about'])->name('about');
Route::get('signin',[UserAuthController::class, 'loginpage'])->name('loginpage');
Route::get('contact',[UserAuthController::class, 'services'])->name('services');
Route::get('blog',[UserAuthController::class, 'blog'])->name('blog');
Route::resource('student', StudentController::class);
Route::post('signin', [UserAuthController::class,'login'])->name('user login');
Route::post('logout',[UserAuthController::class, 'logout'])->name('user logout');
Route::resource('post', PostController::class);
Route::resource('comment', CommentController::class);
