<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;

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

Route::post('/register', [RegisterController::class, 'store'] );
Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/make-request', [RequestController::class, 'index']);
Route::post('/make-request', [RequestController::class, 'store']);
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/dashboard/adduser', [AdminController::class, 'adduser']);
Route::get('/dashboard/listuser', [AdminController::class, 'listUser']);
Route::post('/addUser', [AdminController::class, 'storeUser']);
Route::get('/user/hapus/{id}', [AdminController::class, 'hapus']);
Route::get('/user/edit/{id}', [AdminController::class, 'edit']);
Route::post('/user/update/{id}', [AdminController::class, 'update']);


Route::get('/register-student', [RegisterController::class, 'index2']);
Route::post('/register-student', [RegisterController::class, 'store2'] );

Route::get('/register-staff', [RegisterController::class, 'index2']);
Route::post('/register-staff', [RegisterController::class, 'store2'] );

Route::get('/register-lecturer', [RegisterController::class, 'index2']);
Route::post('/register-lecturer', [RegisterController::class, 'store2'] );




