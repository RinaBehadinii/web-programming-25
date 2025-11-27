<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::resource('', HomeController::class);
Route::resource('jobs', JobController::class);

