<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::get('login', [AdminController::class, 'login']);
});


// Route::prefix('admin')->group(function(){
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
// });
