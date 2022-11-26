<?php

use Illuminate\Support\Facades\Route;

Route::name('product.')
  ->group(function () {
    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/product/{id}', 'ProductController@show')->name('show');
  });
