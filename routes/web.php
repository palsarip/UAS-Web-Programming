<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminController;
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
Route::post('/reservations/approved/{id}', [ReservationController::class, 'approved']);
Route::post('/reservations/rejected/{id}', [ReservationController::class, 'rejected']);
Route::post('/reservations/checkin/{id}', [ReservationController::class, 'checkin']);
Route::post('/admin/dashboard/delete/{id}', [ReservationController::class, 'destroy']);



Route::get('/admin', [AdminController::class, 'index']);
Route::get('admin/reservations', [AdminController::class, 'reservations']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::post('/admin/dashboard/approved/{id}', [AdminController::class, 'approved']);
Route::post('/admin/dashboard/rejected/{id}', [AdminController::class, 'rejected']);
// Route::post('/login', [AdminController::class, 'index']);

// Route::resource('/authentication', AuthController::class);