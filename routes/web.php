<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WaytopayController;
use App\Models\Employee;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('Template.Template');
});

Route::resource('employee',EmployeeController::class);

Route::resource('waytopay',WaytopayController::class);

Route::resource('quote',QuoteController::class);

Route::resource('promotion',PromotionController::class);

Route::resource('service',ServiceController::class);
