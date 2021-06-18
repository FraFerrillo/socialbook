<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FriendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');

// // //*CREATE
// Route::get('/crea/post',[HomeController::class,'create']);
//* STORE
Route::post('/Salva/post',[HomeController::class,'store'])->name('store');

// //*INDEX
// Route::get('/tutti/posts',[HomeController::class,'index']);

//* LIKES

Route::post('/attach/user/announcement/{post}', [HomeController::class, 'postsAttachUser'])->name('posts.attach_user');
Route::delete('/detach/user/announcement/{post}', [HomeController::class, 'postsDetachUser'])->name('posts.detach_user');


// USER LIST
// Route::get('/homepage', [HomeController::class, 'indexUsers']);

// FRIENDS

Route::post('/friend', [FriendController::class, 'indexFriends']);
Route::post('/friend/remove', [FriendController::class, 'remove']);
Route::get('/friend/{id}', [FriendController::class, 'showFriends']);
Route::post('/request', [HomeController::class, 'request'])->name('request');


