<?php

use App\Http\Controllers\Manager\Auth\LoginController;
use App\Http\Controllers\Manager\Auth\LogoutController;
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
    Route::get('/', fn() => view('dashboard.layouts.main'))->name('manager.dashboard');

    Route::get('logout', function () {
        auth()->guard('manager')->logout();

        return redirect()->route('manager.login');
    });
});
