<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use App\Http\Controllers\Dash\DashboardController;
use App\Http\Controllers\Dash\PageController;
use App\Http\Controllers\HomeController;

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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

Route::group(
    ['prefix' => 'admin', 'middleware' => Admin::class],
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('pages', PageController::class);
    }
);
