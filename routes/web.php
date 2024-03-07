<?php

use Illuminate\Support\Facades\Route;

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
    return view('beranda');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/stock', [App\Http\Controllers\StockController::class, 'index']);
Route::get('/tambahstock', [App\Http\Controllers\StockController::class, 'create']);
Route::post('/savestock', [App\Http\Controllers\StockController::class, 'store']);
Route::get('/editstock/{id}', [App\Http\Controllers\StockController::class, 'edit']);
Route::put('/updatestock/{id}', [App\Http\Controllers\StockController::class, 'update']);
Route::get('/delete/{id}', [App\Http\Controllers\StockController::class, 'destroy']);

//supplier 
Route::get('/supplier', function () {
    return view('supplier.supplier');
});
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index']);
Route::get('/tambahsupplier', [App\Http\Controllers\SupplierController::class, 'create']);
Route::post('/savesupplier ', [App\Http\Controllers\SupplierController::class, 'store']);
Route::get('/editsupplier/{id} ', [App\Http\Controllers\SupplierController::class, 'edit']);
Route::put('/updatesupplier/{id} ', [App\Http\Controllers\SupplierController::class, 'update']);
Route::get('/deletet/{id} ', [App\Http\Controllers\SupplierController::class, 'destroy']);

//pelanggan
Route::get('/pelanggan', function () {
    return view('pelanggan.pelanggan');
});
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/tambahpelanggan', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/savepelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/editpelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::put('/updatepelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::get('/deletee', [App\Http\Controllers\PelangganController::class, 'destroy']);