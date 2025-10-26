<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
