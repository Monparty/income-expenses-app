<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ledgers_crud_controller;

Route::get('/', function () {
    return view('welcome');
})->name('main');

// Route::resource('/ledgers', Ledgers_crud_controller::class);

Route::get('/ledgers', function () {
    return view('/ledgers/index');
})->name('index');

Route::get('create', function () {
    return view('/ledgers/create');
})->name('create');

Route::get('/ledgers', function () {
    return view('/ledgers/index');
})->name('ledgers');


Route::post('/store', 'Ledgers_crud_controller@store')->name('ledgers.store');
