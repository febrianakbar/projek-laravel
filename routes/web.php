<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/portofolio.blade.php', function () {
    return view('portofolio');
});

Route::get('/index.blade.php', function () {
    return view('index');
});
