<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu/index');
});

Route::get('/waitlist', function () {
    return view('pages/waitlist');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/giftcards', function () {
    return view('pages/giftcards');
});

Route::get('/offers', function () {
    return view('pages/offers');
});