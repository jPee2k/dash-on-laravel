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

        Route::get('about', [\App\Http\Controllers\Dash\DashboardController::class, 'about'])
            ->name('dashboard.about');

        Route::resource('pages', \App\Http\Controllers\Dash\PageController::class)
            ->except('show');

        Route::delete('remove-image/{id}', [\App\Http\Controllers\Dash\PageController::class, 'removeImage'])
            ->name('pages.removeImage');

        Route::resource('templates', \App\Http\Controllers\Dash\TemplateController::class)
            ->except('show');

        Route::get('templates/get-template-fields/{id}', [\App\Http\Controllers\Dash\TemplateController::class, 'getTemplateFields'])
            ->name('templates.fields');

        Route::resource('fields', \App\Http\Controllers\Dash\FieldController::class)
            ->only(['store', 'update', 'destroy']);

        Route::resource('pages/custom-fields', \App\Http\Controllers\Dash\CustomFieldController::class)
            ->only(['store', 'update', 'destroy']);

        Route::get('pages/get-custom-fields/{id}', [\App\Http\Controllers\Dash\CustomFieldController::class, 'getCustomFields'])
            ->name('pages.fields');

        // admin/helper/...
        Route::group(['prefix' => 'helper'], function () {
            Route::get('make-slug', function () {
                return \Illuminate\Support\Str::slug(request()->post('str'));
            });
        });
    }
);
