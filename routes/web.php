<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\Reservation;

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
    $reservations = Reservation::all();
    return view('welcome')->with('reservations', $reservations);
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
Route::post('/reservations/checkout/{id}', [ReservationController::class, 'checkout']);
Route::post('/admin/dashboard/delete/{id}', [ReservationController::class, 'destroy']);

Route::resource('/history', HistoryController::class);
Route::post('/history/approved/{id}', [HistoryController::class, 'approved']);
Route::post('/history/rejected/{id}', [HistoryController::class, 'rejected']);
Route::post('/history/checkin/{id}', [HistoryController::class, 'checkin']);
Route::post('/history/checkout/{id}', [HistoryController::class, 'checkout']);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/reservations', [AdminController::class, 'reservations'])->name('admin.reservations');
Route::get('admin/checks', [AdminController::class, 'checks'])->name('admin.checks');
Route::get('admin/history', [AdminController::class, 'history'])->name('admin.history');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::post('/admin/dashboard/approved/{id}', [AdminController::class, 'approved']);
Route::post('/admin/dashboard/rejected/{id}', [AdminController::class, 'rejected']);
// Route::post('/login', [AdminController::class, 'index']);

// Route::resource('/authentication', AuthController::class);