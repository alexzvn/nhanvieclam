<?php

use App\Http\Controllers\Manager\Auth\LoginController;
use App\Http\Controllers\Manager\Auth\LogoutController;
use App\Http\Controllers\Manager\CustomerController;
use App\Http\Controllers\Manager\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Manager Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth:manager')->name('logout');

Route::group(['middleware' => 'auth:manager'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('manager.dashboard');

    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', [CustomerController::class, 'index'])->name('manager.customer');
        Route::get('create', [CustomerController::class, 'create'])->name('manager.customer.create');
        Route::post('store', [CustomerController::class, 'store'])->name('manager.customer.store');
        Route::get('{customer}/show', [CustomerController::class, 'show'])->name('manager.customer.show');
        Route::post('{customer}/update', [CustomerController::class, 'update'])->name('manager.customer.update');

        Route::post('{customer}/delete', [CustomerController::class, 'destroy'])->name('manager.customer.delete');
        Route::post('{customer}/ban', [CustomerController::class, 'ban'])->name('manager.customer.ban');
        Route::post('{customer}/pardon', [CustomerController::class, 'pardon'])->name('manager.customer.pardon');
    });
});
