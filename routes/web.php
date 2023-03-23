<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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
    return view('master');
});

Route::get('/dashboard',[PageController::class, 'index']);

Route::get('/profile',[PageController::class, 'profile']);

Route::get('/experience',[PageController::class, 'experience']);

Route::get('/contact-us',[PageController::class, 'contactus']);