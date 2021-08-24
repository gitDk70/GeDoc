<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [DocController::class, 'home']);
Route::get('/about', [DocController::class, 'about']);
Route::get('/samplePost', [DocController::class, 'samplePost']);
Route::get('/contact',[DocController::class,'contact']);
Route::post('/contactForm',[DocController::class,'contactForm']);
