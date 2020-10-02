<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('employers');});
Route::get('/', 'EmployerController@index') -> name('employers');
