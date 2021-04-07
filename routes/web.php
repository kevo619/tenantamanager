<?php

use App\Http\Controllers\TenantsController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\FetchExpensesController;
use App\Models\Expense;
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
    //return $utilities = Expense::all()->where('category', '=', 'Utilities')->sum('amount');
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware'=>'auth:sanctum'], function ()
{
    Route::resource('tenants', TenantsController::class);
    Route::resource('expenses', ExpensesController::class);
    Route::resource('rent', RentController::class);
    Route::get('/fetch', FetchExpensesController::class)->name('fetch');
});
