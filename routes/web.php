<?php

use App\Http\Controllers\ReservationController;
use App\Http\Livewire\Auth\Login;
// use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/admin', function () {
    return view('/admin/index');
});

Route::resource('/reservations', ReservationController::class);

// Route::resource('/authentication', AuthController::class);

Auth::routes(['login' => false, 'register' => false]);

Route::middleware(('guest'))->group(function () {
    Route::get('/login', Login::class)->name('login');
    // Route::post('/login', [AuthController::class, 'store']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes()
