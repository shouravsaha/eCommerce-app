<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('/admin')->namespace('App\Http\Controllers\AdminController\Admin')->group(function(){
//     Route::match(['get', 'post'], '/admin/deshboard', [AdminController::class, 'dashboard']);
// });

Route::get('/admin', [AdminController::class, 'dashboard']);
