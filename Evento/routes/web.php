<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogoutController;
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

Route::get('/events', function () {
    return view('admin.events');
});

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
Route::get('/createEvent', function () {
    return view('organiser.createEvent');
});
