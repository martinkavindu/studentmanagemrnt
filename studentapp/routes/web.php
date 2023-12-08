<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\studentController;
use App\http\Controllers\teacherController;
use App\http\Controllers\courseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Layout');
});

Route::resource('students', studentController::class);

Route::resource('teachers', teacherController::class);

Route::resource('courses', courseController::class);