<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpecialityController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services.medical-billing', [HomeController::class, 'MedicalHome'])->name('services.medical-billing');
Route::get('/services.medical-credentialing', [HomeController::class, 'CredentialingHome'])->name('services.medical-credentialing');
Route::get('/services.medical-coding', [HomeController::class, 'mCodingHome'])->name('services.medical-coding');
Route::get('/services.denial-management', [HomeController::class, 'DenialHome'])->name('services.denial-management');
Route::get('/services.out-of-network-billing', [HomeController::class, 'NetworkHome'])->name('services.out-of-network-billing');
Route::get('/services.revenue-cycle-management', [HomeController::class, 'RevenueHome'])->name('services.revenue-cycle-management');
Route::get('/services.medical-billing-consulting', [HomeController::class, 'CounsltngHome'])->name('services.medical-billing-consulting');
Route::get('/services.outsource-medical-billing', [HomeController::class, 'OutsourceHome'])->name('services.outsource-medical-billing');
Route::get('/services.ar-follow-up', [HomeController::class, 'ArHome'])->name('services.ar-follow-up');
Route::get('/contact-us', [HomeController::class, 'ContactHome'])->name('contact-us');
Route::get('/contact-2', [HomeController::class, 'ContHome'])->name('contact-2');

// dynamic routes
Route::get('/specialities/{slug}', [SpecialityController::class, 'show'])->name('specialities');


