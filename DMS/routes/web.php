<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\PickupFormController;
use App\Http\Controllers\User\OrderDetailsController;
use App\Http\Controllers\User\ContactController as User_ContactController;
use App\Http\Controllers\Admin\DashboardController as Admin_DashboardController;
use App\Http\Controllers\Admin\UserController as Admin_UserController;
use App\Http\Controllers\Admin\OrderController as Admin_OrderController;
use App\Http\Controllers\Admin\ContactController as Admin_ContactController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/admin/dashboard', [Admin_DashboardController::class, 'index'])->middleware(['auth','admin'])->name('admin.dashboard');
Route::get('/admin/user', [Admin_UserController::class, 'index'])->middleware(['auth','admin'])->name('admin.user');
Route::get('/admin/order', [Admin_OrderController::class, 'index'])->middleware(['auth','admin'])->name('admin.order');
Route::get('/admin/order/{id}', [Admin_OrderController::class, 'show'])->middleware(['auth','admin'])->name('admin.order.detail');
Route::get('/admin/order/edit/{id}', [Admin_OrderController::class, 'edit'])->middleware(['auth','admin'])->name('admin.order.edit');
Route::put('/admin/order/{id}', [Admin_OrderController::class, 'update'])->middleware(['auth','admin'])->name('admin.order.update');
Route::delete('/admin/order/{id}', [Admin_OrderController::class, 'destroy'])->middleware(['auth','admin'])->name('admin.order.destroy');
Route::get('/admin/contact', [Admin_ContactController::class, 'index'])->middleware(['auth','admin'])->name('admin.contact');
Route::get('/admin/contact/{id}', [Admin_ContactController::class, 'show'])->middleware(['auth','admin'])->name('admin.contact.detail');
Route::delete('/admin/contact/{id}', [Admin_ContactController::class, 'destroy'])->middleware(['auth','admin'])->name('admin.contact.destroy');

Route::get('/user/home', [HomeController::class, 'index'])->middleware(['auth','user'])->name('user.home');
Route::post('/user/home/ratecalculate', [HomeController::class, 'calculate'])->middleware(['auth','user'])->name('user.rate-calculate');
Route::post('/user/tracking', [HomeController::class, 'track'])->middleware(['auth','user'])->name('user.tracking');
Route::get('/user/rate', [HomeController::class, 'show'])->middleware(['auth','user'])->name('user.rate-show');
Route::get('/user/about', [AboutController::class, 'index'])->middleware(['auth','user'])->name('user.about');
Route::get('/user/pickupform', [PickupFormController::class, 'index'])->middleware(['auth','user'])->name('user.pickupform');
Route::post('/user/pickupform/store', [PickupFormController::class, 'store'])->middleware(['auth','user'])->name('user.pickupform.store');
Route::get('/user/orderdetails', [OrderDetailsController::class, 'index'])->middleware(['auth','user'])->name('user.orderdetails');
Route::get('/user/contact', [User_ContactController::class, 'index'])->middleware(['auth','user'])->name('user.contact');
Route::post('/user/contact/store', [User_ContactController::class, 'store'])->middleware(['auth','user'])->name('user.contact.store');


