<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/Nosotros', function () {
    return view('Nosotros');
})->name('Nosotros');
Route::get('/Contacto', function () {
    return view('Contacto');
})->name('Contacto');