<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
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
        });
    });
}
