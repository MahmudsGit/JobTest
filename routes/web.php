<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\QueryOneController;
use App\Http\Controllers\QueryTwoController;
use App\Http\Controllers\SellerController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('custom-dashboard/dashboard');
})->name('dashboard');

Route::group(['prefix'=> 'dashboard', 'middleware'=>'auth'], function (){
    Route::resource('/seller', SellerController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/query/one', QueryOneController::class);
    Route::resource('/query/two', QueryTwoController::class);
});

