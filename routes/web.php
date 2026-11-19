<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pagina1');
});

Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/pagina2', function () {
    return view('pagina2');
});

Route::get('/pagina3', function () {
    return view('pagina3');
});

Route::get('/pagina4', function () {
    return view('pagina4');
});

Route::get('/pagina5', function () {
    return view('pagina5');
});