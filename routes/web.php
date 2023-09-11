<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DoctorBookingController;
use App\Http\Controllers\DoctorDisplayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorDisplayController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



// USER INTERFACE ONLY
// Home page
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/',[HomeController::class,'index'])->name('home');

//login page
Route::get('/login', function () {
    return view('login.index');
})->name('login');

//register page
Route::get('/register', function () {
    return view('register.index');
})->name('register');

//majors page
Route::get('/majors',[MajorDisplayController::class,'index'])->name('majors');

//history page
Route::get('/history', function () {
    return view('history.index');
})->name('history');

//contact page
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

//doctor index page
Route::get('/doc/index/{major_id}',[DoctorDisplayController::class,'index'])->name('doctor.index');

//doctor page
Route::get('/doctor/page/{id}',[DoctorBookingController::class,'index'])->name('docPage');

Route::post('/doctor/booking/{doctor_id}',[BookingController::class,'store'])->name('doctorBooking');

// user routes
Route::get('/users',[UserController::class,'index']) ->name('user');
Route::get('/users/register',[UserController::class,'create'])->name('users.create');
Route::post('/users/register',[UserController::class,'store'])->name('users.store');
Route::delete('/users/delete/{id}',[UserController::class ,'destroy']) ->name('users.delete');
require_once __DIR__ . '/admin/admin.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
