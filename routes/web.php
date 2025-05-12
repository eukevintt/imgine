<?php

use App\Http\Controllers\ImagesAPIController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImagesAPIController::class, 'index'])->name('home');
Route::get('/search-images', [ImagesAPIController::class, 'searchImages'])->name('images.search');
Route::get('show/{database}/{id}', [ImagesAPIController::class, 'show'])->name('images.show');
Route::post('download/{database}', [ImagesAPIController::class, 'download'])->name('image.download');
Route::get('/generate', [ImagesAPIController::class, 'generate'])->name('images.generate');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/privacy-policy', [MainController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [MainController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/donations', [MainController::class, 'donations'])->name('donations');

Route::get('/get-started', [MainController::class, 'getStarted'])->name('get-started');
