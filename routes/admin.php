<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

if(env('APP_ADMIN_URL')){
    Route::name('admin.')->prefix('admin')->group(function(){
        Route::controller(LoginController::class)->name('auth.')->prefix('auth')->group(function(){
            route::get('/','index')->name('index');
            route::post('/login','login')->name('login');
            route::post('/logout', 'logout')->name('logout');
        });

        Route::middleware(['auth:web'])->group(function(){
            Route::controller(DashboardController::class)->name('dashboard.')->prefix('dashboard')->group(function(){
                route::get('/','index')->name('index');
            });

            Route::controller(FAQController::class)->name('faq.')->prefix('faq')->group(function () {
                route::get('/', 'index')->name('index');
                route::get('/getdata', 'getdata')->name('getdata');
                route::get('/create', 'create')->name('create');
                route::post('/store', 'store')->name('store');
                route::get('/{id}/edit', 'edit')->name('edit');
                route::put('/{id}/update', 'update')->name('update');
                route::delete('/{id}/destroy', 'destroy')->name('destroy');
            });

            // Setting
            Route::controller(SettingController::class)->name('setting.')->prefix('setting')->group(function () {
                route::get('/', 'index')->name('index');
                route::post('/store', 'store')->name('store');
            });

            // Contact
            Route::controller(ContactController::class)->name('contact.')->prefix('contact')->group(function () {
                route::get('/', 'index')->name('index');
                route::get('/getdata', 'getdata')->name('getdata');
            });

            Route::prefix('master-data')->name('masterdata.')->group(function(){
                Route::controller(BannerController::class)->name('banner.')->prefix('banner')->group(function () {
                    route::get('/', 'index')->name('index');
                    route::get('/getdata', 'getdata')->name('getdata');
                    route::get('/create', 'create')->name('create');
                    route::post('/store', 'store')->name('store');
                    route::get('/{id}/edit', 'edit')->name('edit');
                    route::put('/{id}/update', 'update')->name('update');
                    route::delete('/{id}/destroy', 'destroy')->name('destroy');
                });
            });
        });
    });
}
