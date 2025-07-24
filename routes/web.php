<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'index'])->name("data.index");
 Route::get('/users/data', [DataController::class, 'getData'])->name('data.data');