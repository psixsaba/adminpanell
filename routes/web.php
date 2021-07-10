<?php

use App\Http\Controllers\WelcomeController;
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

use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', [CrudController::class, 'index'])->name('index');
    Route::post('/hire/{id}', [CrudController::class, 'hire'])->name('hire');
    Route::get('/create/', [CrudController::class, 'create'])->name('create');
    Route::post('/store/', [CrudController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CrudController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CrudController::class, 'delete'])->name('delete');
    Route::get('/mail-send', [WelcomeController::class, 'mailSend']);
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
