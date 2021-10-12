<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;

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
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('login', [FacebookController::class, 'loginWithFacebook'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromFacebook'])->name('callback');
});
// Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
// Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
