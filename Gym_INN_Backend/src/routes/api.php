<?php

use Illuminate\Support\Facades\Route;
use App\Actions\Fortify\RegisteredUserController;
use App\Actions\Fortify\AuthenticateController;

Route::post('/login', [AuthenticateController::class, 'store']);
Route::post('/logout', [AuthenticateController::class, 'destroy']);
Route::post('/register', [RegisteredUserController::class, 'store']);
