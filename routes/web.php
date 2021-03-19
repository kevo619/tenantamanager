<?php

use App\Http\Controllers\TenantsController;
use App\Http\Controllers\ExpensesController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
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
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware'=>'auth:sanctum'], function ()
{
    //Route::get('/tenants', [TenantsController::class,'index'])->name('tenants');
    Route::resource('tenants', TenantsController::class);
    Route::resource('expenses', ExpensesController::class);
    // Route::get('/expenses', [ExpensesController::class,'index'])->name('expenses');
});
