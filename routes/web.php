<?php

use App\Http\Controllers\ClinicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//to show the form of add patient
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//route to store patient info
Route::post('patient',[PatientController::class,'store'])->name('patient.store')->middleware('auth');

//route to search for patient with phone 
Route::get('search',[PatientController::class,'search'])->name('patient.search')->middleware('auth');

//route to make a visit for this patient
Route::post('visit/{patientId}',[PatientController::class,'visit'])->name('patient.visit')->middleware('auth');

//route to return to the visit view
Route::get('toVisit',[PatientController::class,'toVisit'])->name('toVisit')->middleware('auth');

//route to display clinic schedule
Route::get('schedule',[ClinicController::class,'display'])->name('schedule.display')->middleware('auth');

//route to make initial bill
Route::get('makeBill/{visitId}',[PatientController::class,'makeBill'])->name('patient.bill')->middleware('auth');

//route to add procedure
Route::post('procedure',[ClinicController::class,'addProcedure'])->name('add.procedure')->middleware('auth');

//route to add doctor assessment
Route::post('assessment/{visitId}',[ClinicController::class,'addAssessment'])->name('add.assessment')->middleware('auth');

//route to get the first bill
Route::get('firstBill/{visitId}',[ClinicController::class,'firstBill'])->name('first.bill')->middleware('auth');

//route to show procedures
Route::get('showProcedure',[ClinicController::class,'getProcedure'])->name('show.procedure')->middleware('auth');

//route to make final bill
Route::post('finalBill/{$visitId}/{$billId}',[ClinicController::class,'finalBill'])->name('finalBill')->middleware('auth');

