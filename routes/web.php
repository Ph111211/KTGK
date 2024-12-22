<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', [userController::class, 'index']) -> name('index');
// tao csdl
Route::get('/create', [userController::class, 'create']) -> name('create');
Route::post('/store', [userController::class, 'store']) -> name('store');

Route::delete('/delete/{id}', [userController::class, 'destroy']) -> name('destroy');

Route::get('/edit/{id}', [userController::class, 'edit']) -> name('edit');
Route::post('/update/{id}', [userController::class, 'update']) -> name('update');


