<?php

use App\Http\Controllers\CarShowroomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/showroom', [CarShowroomController::class, 'index'])->name('showroom.index');
Route::get('/showroom/contact', [CarShowroomController::class, 'contactForm'])->name('showroom.contact');
Route::post('/showroom/contact', [CarShowroomController::class, 'contactStore'])->name('showroom.store');
