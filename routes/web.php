<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
        ->name('home.index');
});

Route::group(
    ['prefix' => 'admin', 'middleware' => Admin::class],
    function () {
        Route::get('/', [\App\Http\Controllers\Dash\DashboardController::class, 'index'])
            ->name('dashboard.index');

        Route::resource('pages', \App\Http\Controllers\Dash\PageController::class)
            ->except('show');

        Route::group(['prefix' => 'helper'], function () { // admin/helper/make-slug
            Route::get('make-slug', function () {
                return \Illuminate\Support\Str::slug(request()->post('str'));
            });
        });
    }
);
