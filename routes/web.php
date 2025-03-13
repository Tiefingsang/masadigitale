<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

/* Route::get('/', function () {
    return view('welcome');
});
 */



Route::get('/', [PageController::class, 'index'])->name('home.index');

Route::get('/about', [PageController::class, 'about'])->name('about.index');
Route::get('/services', [PageController::class, 'services'])->name('services.index');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs.index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact.index');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery.index');
Route::get('/team', [PageController::class, 'team'])->name('team.index');

Route::get('/about-detail', [PageController::class, 'aboutDetail'])->name('about-detail');
Route::get('/services-detail', [PageController::class, 'servicesDetail'])->name('services-detail');
Route::get('/blogs-detail', [PageController::class, 'blogsDetail'])->name('blogs-detail');
Route::get('/contact-detail', [PageController::class, 'contactDetail'])->name('contact-detail');
Route::get('/gallery-detail', [PageController::class, 'galleryDetail'])->name('gallery-detail');
Route::get('/team-datail', [PageController::class, 'teamDetail'])->name('team.detail');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin.index');
});
