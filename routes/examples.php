<?php

Route::get('/examples/cds', function () {
    return view('examples/cds');
})->name('examples/cds');
Route::get('/examples/form', function () {
    return view('examples/form');
})->name('examples/form');
