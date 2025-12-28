<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\ProjectRequestController;

Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/realisations', [PageController::class, 'realisations'])->name('realisations');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/contact-projet', [PageController::class, 'contactprojet'])->name('contactprojet');


 

Route::get('/qrcode', [QrCodeController::class, 'show'])->name('qrcode.show');
Route::get('/qrcode/download', [QrCodeController::class, 'download'])->name('qrcode.download');
Route::post('/project-requests', [ProjectRequestController::class, 'store'])->name('project-requests.store');