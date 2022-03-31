<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupportController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hardware', function () {
    return view('hardware');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/sales', function(){
    return view('sales');
});

Route::get('/support', function(){
    return view('support');
});

Route::resource('/user', UserController::class);

Route::resource('/hardware', HardwareController::class);

Route::resource('/equipment', EquipmentController::class);

Route::resource('/sales', SalesController::class);

Route::resource('/support', SupportController::class);
