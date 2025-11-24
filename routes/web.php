<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

if (file_exists(base_path('routes/examples.php'))) {
    require base_path('routes/examples.php');
}
