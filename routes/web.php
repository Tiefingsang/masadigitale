<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/* Route::get('/', function () {
    return view('welcome');
});
 */



Route::get('/', [PageController::class, 'index'])->name('home.index');
Route::get('/about', [PageController::class, 'about'])->name('about.index');
Route::get('/services', [PageController::class, 'services'])->name('services.index');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs.index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact.index');
