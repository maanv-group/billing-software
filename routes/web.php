<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class,'index']);
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'unauthenticated']);

Route::post('/login', [AuthController::class, 'authenticate']);

Route::group(['middleware' => ['auth']], function(){
    // Route::prefix('dashboard')->group(function(){
    //     Route::get('/', [DashboardController::class, 'index']);
    // });
    Route::group(['prefix'=> '/{user}'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('user.profile');
        
    });
});