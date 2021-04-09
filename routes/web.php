<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientcontroller;

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


Route::get('/',[patientcontroller::class ,'create']);
Route::post('/patientread',[patientcontroller::class ,'store']);
Route::get('/viewallpatient',[patientcontroller::class ,'index']);
Route::post('/patientsearch',[patientcontroller::class ,'search']);

Route::get('/patient/{id}/edit',[patientcontroller::class ,'edit']);

Route::post('/patientedit/{id}',[patientController::class,'update']);

