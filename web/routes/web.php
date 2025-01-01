<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/criptowallet', function () {
    return inertia('CriptoBalance');
});
