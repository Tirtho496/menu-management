<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('view-report/{id}',[HomeController::class,'viewReport']);
});


 Route::middleware(['auth','checkAdmin'])->group(function() {

    Route::get('users',[UserController::class,'index']);
    Route::get('create-users',[UserController::class,'addPage']);
    Route::post('insert-user',[UserController::class,'insert']);
    Route::get('dashboard',[DashboardController::class,'index']);
    Route::get('view-menu',[MenuController::class,'index']);
    Route::get('create-menu',[MenuController::class,'addPage']);
    Route::post('insert-menu',[MenuController::class,'insert']);
    Route::get('delete-menu/{id}',[MenuController::class,'delete']);

    Route::get('view-report',[ReportController::class,'index']);
    Route::get('create-report',[ReportController::class,'addPage']);
    Route::post('insert-report',[ReportController::class,'insert']);
    Route::get('delete-report/{id}',[ReportController::class,'delete']);
 });
