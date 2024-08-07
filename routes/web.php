<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::match(['get', 'post'],'login', [AdminController::class, 'login']);
    Route::group(['middleware' => ['admin']], function(){
        Route::match(['get', 'post'],'dashboard', [AdminController::class, 'dashboard']);
    });
});


// Route::prefix('admin')->group(function(){
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
// });
