<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\IctController;
use App\Http\Controllers\OtherAnnouncementsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\controllers\AdminController;


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

Route::get('/home_dashboard', function () {
    return view('home_dashboard');
});

// admin
Route::resource('admin', App\Http\Controllers\AdminController::class);

// Signup form
Route::get('/signup', function () {
    return view('signup');
});

// Login form
Route::get('/loginform', function () {
    return view('loginform');
});
Route::get('/notification', function () {
    return view('notification');
});

// Users
Route::post('/UserData', [UserController::class, 'store']);


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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
