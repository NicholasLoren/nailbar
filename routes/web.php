<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
 

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Optional admin route for viewing contacts (add auth middleware as needed)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/contacts', [ContactController::class, 'admin'])->name('admin.contacts');
    Route::patch('/admin/contacts/{contact}/read', [ContactController::class, 'markAsRead'])->name('admin.contacts.read');
});

require __DIR__.'/auth.php';
