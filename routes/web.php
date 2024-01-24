<?php

use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MasterController::class, 'index'])->name('home');
