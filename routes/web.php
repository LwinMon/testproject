<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return "This is about page.";
});
Route::get('view', function () {
    return "This is view page.";
});
