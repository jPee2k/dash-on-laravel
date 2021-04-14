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

        Route::delete('remove-image/{id}', [\App\Http\Controllers\Dash\PageController::class, 'removeImage'])
            ->name('pages.removeImage');

        Route::resource('templates', \App\Http\Controllers\Dash\TemplateController::class)
            ->except('show');

        Route::post('templates/get-template-fields/{id}', [\App\Http\Controllers\Dash\TemplateController::class, 'getTemplateFields'])
            ->name('templates.fields');

        Route::resource('fields', \App\Http\Controllers\Dash\FieldController::class);

        // admin/helper/...
        Route::group(['prefix' => 'helper'], function () {
            Route::get('make-slug', function () {
                return \Illuminate\Support\Str::slug(request()->post('str'));
            });
        });
    }
);
