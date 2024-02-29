<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserControlController;

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

Route::middleware(['guest'])->group(function () {
    Route::view('/', 'halaman_depan/index');
    Route::get('/sesi', [AuthController::class, 'index'])->name('auth');
    Route::post('/sesi', [AuthController::class, 'login']);
    Route::get('/reg', [AuthController::class, 'create'])->name('registrasi');
    Route::post('/reg', [AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('/home', '/user');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('userAkses:admin');
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

//========== BLOG =========//
Route::get('/data/blog',[App\Http\Controllers\DataController::class,'blogGet'])->name('data.blog.index');
Route::get('/data/blog/create',[App\Http\Controllers\DataController::class,'blogCreate'])->name('data/blog/create');
Route::get('/data/blog/edit/{blog}',[App\Http\Controllers\DataController::class,'blogEdit'])->name('data.blog.edit');
Route::post('/data/blog/post',[App\Http\Controllers\DataController::class,'blogPost'])->name('data.blog.post');
Route::get('/data/blog/index/delete/{id}', [App\Http\Controllers\DataController::class,'blogDel']);
