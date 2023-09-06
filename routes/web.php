<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
Require __DIR__ . '/admin/admin.php';

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

Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::get('/',[MajorController::class,'getData'])->name('home');
Route::get('/',[DoctorController::class,'getData'])->name('home');

// USER INTERFACE ONLY
// Home page
// Route::get('/home', function () {
//     return view('home.index');
// })->name('home');

//login page
Route::get('/login', function () {
    return view('login.index');
})->name('login');
//register page
Route::get('/register', function () {
    return view('register.index');
})->name('register');
//majors page
Route::get('/majors', function () {
    return view('majors.index');
})->name('majors');
//history page
Route::get('/history', function () {
    return view('history.index');
})->name('history');
//contact page
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
//doctor index page
Route::get('/doctor/index', function () {
    return view('doctors.index');
})->name('doctor.index');
//doctor page
Route::get('/doctor', function () {
    return view('doctors.doctor');
})->name('doctor');
Route::post('/doctor',[BookingController::class,'store'])->name('doctorBooking');
