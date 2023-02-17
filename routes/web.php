<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\TransactionController;



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
    return  view('auth.login');
});


Auth::routes();
// Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class,'register']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Users
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::get('/users-edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('users.edit');
Route::put('/users-update/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('users.update');


// Merchant
Route::get('/merchant', [App\Http\Controllers\MerchantController::class, 'index'])->name('merchant.index');
Route::get('/merchant-create', [App\Http\Controllers\MerchantController::class, 'create'])->name('merchant.create');
Route::post('/merchant-store', [App\Http\Controllers\MerchantController::class, 'store'])->name('merchant.store');


//Devices
Route::get('/devices', [App\Http\Controllers\DeviceController::class, 'index'])->name('device.index');
Route::get('/device-create/{id}', [App\Http\Controllers\DeviceController::class, 'create'])->name('devices.create');
Route::post('/device-store', [App\Http\Controllers\DeviceController::class, 'store'])->name('device.store');

//Transaction
Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions.index');
Route::get('/filter-transactions', [App\Http\Controllers\TransactionController::class, 'filterbyDate'])->name('transactions.filter');
Route::get('/merchant-transactions/{id}', [App\Http\Controllers\TransactionController::class, 'viewById'])->name('merchant.transactions');

