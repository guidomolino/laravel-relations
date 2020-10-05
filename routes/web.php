<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('employees');});
Route::get('/', 'EmployeeController@index') -> name('employees');
