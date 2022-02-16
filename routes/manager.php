<?php

use App\Http\Controllers\Manager\Auth\LoginController;
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

Route::group(['middleware' => 'auth:manager'], function () {
    Route::get('/', fn() => view('dashboard.layouts.main'));

    Route::get('logout', function () {
        auth()->guard('manager')->logout();

        return redirect()->route('manager.login');
    });
});
