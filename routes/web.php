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
Route::get('/register', [PagesController::class, 'register']);
Route::get('/logout', [AuthController::class, 'unauthenticated']);

Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth']], function(){
    // Route::prefix('dashboard')->group(function(){
    //     Route::get('/', [DashboardController::class, 'index']);
    // });
    Route::group(['prefix'=> '/{user}'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('user.profile');
        Route::get('/help', [DashboardController::class, 'profile'])->name('user.help');
        Route::get('/search', [DashboardController::class, 'profile'])->name('user.search');
        Route::group(['prefix'=>'/settings'], function(){
            Route::get('/', [DashboardController::class, 'profile'])->name('user.settings');
            Route::get('/password', [DashboardController::class, 'profile'])->name('user.password');
        });
    });
});