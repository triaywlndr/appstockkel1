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
<<<<<<< HEAD
=======
    return view('admin.layout');
});

Route::get('/admin', function () {
>>>>>>> 3609376a7538f52e9482485142f943b94d910832
    return view('admin.admin');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/tambahstock', [App\Http\Controllers\stockController::class, 'create']);
