<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
//middleware "auth"
Route::group(['middleware' => ['auth']], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('/jh2hceksaldo', [App\Http\Controllers\Javah2h::class,'cekSaldo'])->name('CeksaldoJh2h');
        Route::get('/jh2hdeposit', [App\Http\Controllers\Javah2h::class,'DepositSaldo'])->name('depositSaldojh2h');
        Route::get('/jh2hcekharga', [App\Http\Controllers\Javah2h::class,'cekHarga'])->name('cekHargajh2h');
        Route::get('/adminuser',[App\Http\Controllers\AdminUserController::class,'index'])->name('adminuser.index');
        //Route::get('users', [UserController::class, 'index'])->name('users.index');
});
