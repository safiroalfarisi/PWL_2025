<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
//     });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($articlesId) {
    return 'Artikel ke-'.$articlesId;
});

Route::get('/user/{name?}', function ($name= 'John') {
    return 'Nama saya '.$name;
    });