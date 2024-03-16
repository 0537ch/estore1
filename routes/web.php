<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/account', function () {
    return view('account');
});