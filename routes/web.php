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
Route::get('/admin', [App\Http\Controllers\admincontroller::class, 'index']);

//admin
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/admin', [App\Http\Controllers\admincontroller::class, 'index']);


//stock
Route::get('/stock', function () {
    return view('stock.stock');
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
Route::get('/deletee/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

//bmasuk
Route::get('/bmasuk', function () {
    return view('bmasuk.bmasuk');
});
Route::get('/bmasuk', [App\Http\Controllers\BmasukController::class, 'index']);
Route::get('/tambahbmasuk', [App\Http\Controllers\BmasukController::class, 'create']);
Route::post('/savebmasuk', [App\Http\Controllers\BmasukController::class, 'store']);
Route::get('/editbmasuk/{id}', [App\Http\Controllers\BmasukController::class, 'edit']);
Route::put('/updatebmasuk/{id}', [App\Http\Controllers\BmasukController::class, 'update']);
Route::get('/deletep/{id}', [App\Http\Controllers\BmasukController::class, 'destroy']);

//bkeluar
Route::get('/bkeluar', function () {
    return view('bkeluar.bkeluar');
});
Route::get('/bkeluar', [App\Http\Controllers\BkeluarController::class, 'index']);
Route::get('/tambahbkeluar', [App\Http\Controllers\BkeluarController::class, 'create']);
Route::post('/savebkeluar', [App\Http\Controllers\BkeluarController::class, 'store']);
Route::get('/editbkeluar/{id}', [App\Http\Controllers\BkeluarController::class, 'edit']);
Route::put('/updatebkeluar/{id}', [App\Http\Controllers\BkeluarController::class, 'update']);
Route::get('/deletew/{id}', [App\Http\Controllers\BkeluarController::class, 'destroy']);

//recap
Route::get('/recap', function () {
    return view('recap.recap');
});
Route::get('/recap', [App\Http\Controllers\RecapController::class, 'index']);
Route::get('/tambahrecap', [App\Http\Controllers\RecapController::class, 'create']);
Route::post('/saverecap', [App\Http\Controllers\RecapController::class, 'store']);
Route::get('/editrecap/{id}', [App\Http\Controllers\RecapController::class, 'edit']);
Route::put('/updaterecap/{id}', [App\Http\Controllers\RecapController::class, 'update']);
Route::get('/deleteq/{id}', [App\Http\Controllers\RecapController::class, 'destroy']);

