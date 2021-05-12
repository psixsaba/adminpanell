<?php

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

use App\Http\Controllers\CRUDController;

Route::get('/', function () {
    return view('welcome');
});

//
//Route::group(['prefix' => 'CRUDs'], function (){
//    Route::get('', [CRUDController::class, 'index'])->name('index');
//    Route::get('details/{id}', [CRUDController::class, 'show'])->name('show');
//    Route::delete('delete/{id}', [CRUDController::class, 'delete'])->name('delete');
//    Route::get('edit/{id}', [CRUDController::class, 'edit'])->name('edit');
//    Route::get('create/{id}', [CRUDController::class, 'create'])->name('create');
//    Route::post('store/{id}', [CRUDController::class, 'store'])->name('store');
////    Route::put('update/{id}', [CRUDController::class, 'update'])->name('update');
//});


Route::get('/CRUDs', [CRUDController::class, 'index'])->name('index');
Route::post('/CRUDs/hire/{id}', [CRUDController::class, 'hire'])->name('hire');
//Route::get('/CRUDs/details/{id}', [CRUDController::class, 'show'])->name('show');
Route::get('/CRUDs/create/', [CRUDController::class, 'create'])->name('create');
Route::post('/CRUDs/store/', [CRUDController::class, 'store'])->name('store');
Route::get('/CRUDs/edit/{id}', [CRUDController::class, 'edit'])->name('edit');
Route::put('/CRUDs/update/{id}', [CRUDController::class, 'update'])->name('update');
Route::delete('/CRUDs/delete/{id}', [CRUDController::class, 'delete'])->name('delete');

