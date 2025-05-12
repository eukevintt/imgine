<?php

use App\Http\Controllers\ImagesAPIController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImagesAPIController::class, 'index'])->name('home');
Route::get('/search-images', [ImagesAPIController::class, 'searchImages'])->name('images.search');
Route::get('show/{database}/{id}', [ImagesAPIController::class, 'show'])->name('images.show');

Route::get('/generate');
Route::get('/about');
Route::get('/contact');
Route::get('/privacy-policy');
Route::get('/terms-of-service');
