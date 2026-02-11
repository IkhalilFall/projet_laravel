<?php

use Illuminate\Support\Facades\Route;


///////////les routes //////////////////////////////////////

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/tables', function () {
    return view('tables');
});


Route::get('/register', function () {
    return view('register');
});