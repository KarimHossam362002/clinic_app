<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\RateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ADMIN INTERFACE ONLY

Route::get('/dashboard', function () {
    return view('admin.layout');

})->name('dashboard');

//Majors routes
Route::get('/majordisplay',[MajorController::class ,'index'])->name('major.index');
// Delete
Route::delete('/major/delete/{id}',[MajorController::class ,'destroy'])->name('major.delete');
//Update
Route::get('/majoredit/{id}',[MajorController::class ,'edit'])->name('major.edit');

Route::put('/majors/update/{id}',[MajorController::class ,'update'])->name('major.update');
// create

Route::get('/majorcreate',[MajorController::class ,'create'])->name('major.create');

Route::post('/majordisplay',[MajorController::class ,'store'])->name('major.store');


//doctor routes
Route::resource('/doctors',DoctorController::class);
Route::resource('/bookings',BookingController::class);
Route::resource('/contact_us',ContactUsController::class);
Route::resource('/rates',RateController::class);


