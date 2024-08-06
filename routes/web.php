<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('login', [AdminController::class, 'login']);
    Route::group(['middleware' => ['admin']], function(){
        Route::get('dashboard', [AdminController::class, 'dashboard']);
    });
});


// Route::prefix('admin')->group(function(){
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
// });
