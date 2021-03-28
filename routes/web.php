<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;

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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [PageController::class, 'index'])->name('home.index');
});

Route::group(
    ['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => Admin::class],
    function () {
        Route::get('/', [DashboardController::class, 'index']);
    }
);
