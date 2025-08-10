<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController:: class, 'index'])->name('users.index');
Route::get('/create-user', [UserController:: class, 'create'])->name('users.create');
Route::post('/store-user', [UserController:: class, 'store'])->name('users.store');
