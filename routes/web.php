<?php

use App\Http\Controllers\ImagesAPIController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImagesAPIController::class, 'index']);
Route::get('/images', [ImagesAPIController::class, 'searchImages']);
