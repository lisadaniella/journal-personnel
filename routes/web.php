<?php

use Illuminate\Support\Facades\Route;

//  Route principale qui charge l'application Vue.js
Route::get('/{any}', function () {
    return view('app'); // resources/views/app.blade.php
})->where('any', '.*');
