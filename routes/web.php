<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

date_default_timezone_set('Asia/Jakarta');

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

Route::get('/', [Customer\HomeController::class, 'index']);

Route::get('/login', [Customer\LoginController::class, 'index']);

Route::get('/register', [Customer\RegisterController::class, 'index']);
Route::post('/register/req', [Customer\RegisterController::class, 'register']);

Route::get('/about', function () {
    return view('customers.about.index', [
        'title' => 'About',
        'nvb' => 'about'
    ]);
});

Route::get('/rooms', [Customer\RoomController::class, 'index']);
Route::get('/rooms/{id}', [Customer\RoomController::class, 'detail']);

Route::post('/purchase', [ Customer\PurchaseController::class, 'index'])->middleware('auth');
Route::post('/purchase/finish', [Customer\PurchaseController::class, 'finish'])->middleware('auth');

Route::get('/history', [Customer\HistoryController::class, 'index'])->middleware('auth');
Route::get('/history/invoice/{id}', [Customer\HistoryController::class, 'invoice'])->middleware('auth');

Route::get('/account', [Customer\AccountController::class, 'index'])->middleware('auth');
Route::get('/account/edit', [Customer\AccountController::class, 'edit'])->middleware('auth');
Route::post('/account/update', [Customer\AccountController::class, 'update'])->middleware('auth');

Route::get('/admin', [Admin\DashboardController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/req', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/admin/users', [Admin\UserController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/users/add', [Admin\UserController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/users/store', [Admin\UserController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/users/edit/{id}', [Admin\UserController::class, 'edit'])->middleware('auth', 'admin');
Route::post('/admin/users/update', [Admin\UserController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/users/remove/{id}', [Admin\UserController::class, 'remove'])->middleware('auth', 'admin');

Route::get('/admin/services', [ Admin\ServiceController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/services/add', [Admin\ServiceController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/services/store', [Admin\ServiceController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/services/edit/{id}', [Admin\ServiceController::class, 'edit'])->middleware('auth', 'admin');
Route::post('/admin/services/update', [Admin\ServiceController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/services/remove/{id}', [Admin\ServiceController::class, 'remove'])->middleware('auth', 'admin');

Route::get('/admin/roomtype', [Admin\RoomTypeController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/roomtype/add', [Admin\RoomTypeController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/roomtype/store', [Admin\RoomTypeController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/roomtype/edit/{id}', [Admin\RoomTypeController::class, 'edit'])->middleware('auth', 'admin');
Route::post('/admin/roomtype/update', [Admin\RoomTypeController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/roomtype/remove/{id}', [Admin\RoomTypeController::class, 'remove'])->middleware('auth', 'admin');

Route::get('/admin/rooms', [Admin\RoomController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/rooms/add', [Admin\RoomController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/rooms/store', [Admin\RoomController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/rooms/edit/{id}', [Admin\RoomController::class, 'edit'])->middleware('auth', 'admin');
Route::post('/admin/rooms/update', [Admin\RoomController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/rooms/remove/{id}', [Admin\RoomController::class, 'remove'])->middleware('auth', 'admin');

Route::get('/admin/paytype', [Admin\PaytypeController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/paytype/add', [Admin\PaytypeController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/paytype/store', [Admin\PaytypeController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/paytype/edit/{id}', [Admin\PaytypeController::class, 'edit'])->middleware('auth', 'admin');
Route::post('/admin/paytype/update', [Admin\PaytypeController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/paytype/remove/{id}', [Admin\PaytypeController::class, 'remove'])->middleware('auth', 'admin');

Route::get('/admin/bookings', [Admin\BookingController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/bookings/approve/{id}', [Admin\BookingController::class, 'approve'])->middleware('auth', 'admin');
Route::get('/admin/bookings/cancel/{id}', [Admin\BookingController::class, 'cancel'])->middleware('auth', 'admin');