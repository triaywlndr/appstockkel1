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

Route::get('/tokoh', function () {
    return view('admin.layout');
});

//admin
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/tambahstock', [App\Http\Controllers\stock::class, 'create']);
Route::post('/savestock', [App\Http\Controllers\stock::class, 'store']);
Route::get('/edit{id}', [App\Http\Controllers\stock::class, 'edit']);
Route::put('/updatestock{id}', [App\Http\Controllers\stock::class, 'update']);
Route::get('/delete{id}', [App\Http\Controllers\stock::class, 'destroy']);

//supplier 
Route::get('/supplier', function () {
    return view('supplier.supplier');
});
Route::get('/tambahsupplier', [App\Http\Controllers\suppler::class, 'create']);
Route::get('/savesupplier ', [App\Http\Controllers\supplier::class, 'store']);
Route::get('/edit{id} ', [App\Http\Controllers\supplier::class, 'edit']);
Route::get('/updatesupplier{id} ', [App\Http\Controllers\supplier::class, 'update']);
Route::get('/delete{id} ', [App\Http\Controllers\supplier::class, 'destroy']);