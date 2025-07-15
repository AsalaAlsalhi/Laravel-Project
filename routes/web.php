<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
})->name('web');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected dashboard route
Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware('auth')->name('dashboard');

// Privacy Policy
Route::get('/Privacy-Policy', [AuthController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');

//  Voyager Admin Panel
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
