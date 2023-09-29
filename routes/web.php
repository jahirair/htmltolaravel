<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/welcome', function () {
    //return view('welcome');
//});

Route::get('/', [HomeController::Class, 'index']);
Route::get('/about', [AboutController::Class, 'index']);
Route::get('/service', [ServiceController::Class, 'index']);
Route::get('/contact', [ContactController::Class, 'index']);
Route::get('/blog', [BlogController::Class, 'index']);
