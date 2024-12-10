<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/racchette', [ApiController::class, 'getRacchette']);
Route::get('/racchette/{id}', [ApiController::class, 'getRacchettaById']);
