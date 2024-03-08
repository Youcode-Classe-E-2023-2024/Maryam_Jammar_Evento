<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/register', function () {
//    return view('auth.register');
//});

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);


//Route::get('/login', function () {
//    return view('auth.login');
//});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout')->middleware('auth');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/allusers', function () {
    return view('admin.allusers');
});

//Route::get('/events', function () {
//    return view('admin.events');
//});
Route::get('/events', [EventController::class, 'CheckEvent']);


Route::get('/approveEvents', function () {
    return view('admin.approveEvents');
});

Route::get('/organisateur', function () {
    return view('organiser.dashboard');
});

Route::get('/side', function () {
    return view('admin.side');
});


//category
Route::get('/categories', [CategoryController::class, 'showCategories']);

Route::post('/categories', [CategoryController::class, 'store']);

Route::delete('/deleteCategory/{id}', [CategoryController::class, 'destroyCategory']);

//users amdin
Route::get('/allusers', [UserController::class, 'show']);

//organiser
//Route::get('/createEvent', function () {
//    return view('organiser.createEvent');
//});

//events
Route::get('/createEvent', [EventController::class, 'showForm']);

Route::post('/createEvent', [EventController::class, 'store']);

Route::get('/allEvents', [EventController::class, 'AllEvents']);

Route::get('/description/{id}', [EventController::class, 'ShowEventDescription']);

Route::delete('/deleteEvent/{id}', [EventController::class, 'deleteEvent']);

Route::get('/updateEvent/{id}', [EventController::class, 'editEvent']);

Route::post('/updateEvent/{id}', [EventController::class, 'updateEvent']);

Route::get('/forgot-password', [ForgotPasswordLinkController::class, 'create'])->name('forgot-password')
   ;
//
Route::post('/forgot-request', [ForgotPasswordLinkController::class, 'store']);
//
Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('new_password');

// Password Reset Routes
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showForm'])->name('password.reset')
    ;

Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset')->name('password.update');

//home page
Route::get('/', [UserController::class, 'home']);

//aprove or decline
Route::post('/approve-event/{id}', [EventController::class, 'approveEvent']);
Route::post('/decline-event/{id}', [EventController::class, 'declineEvent']);
