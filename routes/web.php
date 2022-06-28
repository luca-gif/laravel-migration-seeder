<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TrainController@index')->name('home');