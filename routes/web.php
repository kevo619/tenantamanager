<?php

use App\Http\Controllers\TenantsController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentsController;
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
    return view('index');
});

//Route::post('upload', [UploadController::class,'store']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware'=>'auth:sanctum'], function ()
{
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('documents/{uuid}/download', [DocumentsController::class,'download'])->name('documents.download');
    Route::resource('tenants', TenantsController::class);
    Route::resource('expenses', ExpensesController::class);
    Route::resource('rent', RentController::class);
    Route::resource('document', DocumentsController::class);

    // Route::get('/fetch', FetchExpensesController::class)->name('fetch');
});
