<?php

use App\Http\Controllers\FrontendConroller;
use App\Http\Controllers\patient\PatientLogin;
use App\Http\Controllers\patient\PatientRegister;
use Illuminate\Support\Facades\Route;

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

/**
 * frontend route
 */
Route::get('/', [FrontendConroller::class, 'index']);
Route::get('login', [FrontendConroller::class, 'login'])->middleware('patient.redirect');

/**
 * doctor route
 */

Route::get('doctorReg', [FrontendConroller::class, 'doctorReg']);
Route::get('doctorDashboard', [FrontendConroller::class, 'doctorDash']);



/**
 * patient route
 */

Route::get('register', [FrontendConroller::class, 'patientReg'])->middleware('patient.redirect');
Route::get('patientDashboard', [FrontendConroller::class, 'patientDash'])->middleware('patient');
Route::post('register', [PatientRegister::class, 'register']);
Route::post('patient/login', [PatientLogin::class, 'login']);
Route::get('patient/logout', [PatientLogin::class, 'patientLogout']);


