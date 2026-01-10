<?php

use Illuminate\Support\Facades\Route;

route::get('/signin', function () {
    return view('signin');
});

route::get('/signup', function () {
    return view('signup');
});

route::get('/history', function () {
    return view('history');
});

route::get('/forgetpassword', function () {
    return view('forgetpassword');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/checkorder', function () {
    return view('checkorder');
});

Route::get('/resultsearch', function () {
    return view('resultsearch');
});

route::get('/eticket', function () {
    return view('eticket');
});