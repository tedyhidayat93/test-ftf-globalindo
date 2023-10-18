<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MemberController::class, 'form']);
Route::post('/store', [MemberController::class, 'store']);
Route::get('/list', [MemberController::class, 'list']);
