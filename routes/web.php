<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Define a route for the root URL
// Route::get('/', function () {
//     return view('welcome');
// });

// Group routes that require authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Define the /redirect route to HomeController@redirect
Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [AdminController::class, 'product']);

Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);


Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home');
