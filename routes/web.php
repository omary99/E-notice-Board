<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\IctController;
use App\Http\Controllers\OtherAnnouncementsController;
use App\Http\Controllers\DashboardController;


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
    return view('homepage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Dashboard
Route::get('/DashboardDataPage', [DashboardController::class, 'index']);

//Travel
Route::get('/TravelPage', [TravelController::class, 'index']); //To see the data entry page
Route::post('/TravelData', [TravelController::class, 'store']);
Route::get('/TravelDataPage', [TravelController::class, 'show']);

//Meeting
Route::get('/MeetingPage', [MeetingController::class, 'index']);
Route::post('/MeetingData', [MeetingController::class, 'store']);
Route::get('/MeetingDataPage', [MeetingController::class, 'show']);

//Holiday
Route::get('/HolidayPage', [HolidayController::class, 'index']);
Route::post('/HolidayData', [HolidayController::class, 'store']);
Route::get('/HolidayDataPage', [HolidayController::class, 'show']);

//Training
Route::get('/TrainingPage', [TrainingController::class, 'index']);
Route::post('/TrainingData', [TrainingController::class, 'store']);
Route::get('/TrainingDataPage', [TrainingController::class, 'show']);

//Information and Communication Technology Advertising
Route::get('/IctPage', [IctController::class, 'index']);
Route::post('/IctData', [IctController::class, 'store']);
Route::get('/IctDataPage', [IctController::class, 'show']);

//
Route::get('/OtherAnnouncementsPage', [OtherAnnouncementsController::class, 'index']);
Route::post('/OtherAnnouncementsData', [OtherAnnouncementsController::class, 'store']);
Route::get('/OtherAnnouncementsDataPage', [OtherAnnouncementsController::class, 'show']);