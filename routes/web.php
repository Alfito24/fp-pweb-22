<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\KalabController;

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

// Request
// Route::get('/dashboard_user/create_request', [RequestController::class, 'index']);
// Route::post('/dashboard_user/store_request', [RequestController::class, 'store']);
// Route::get('/dashboard_user/edit_request', [RequestController::class, 'index']);

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


// Student
Route::get('/dashboard_user', [StudentController::class, 'index']);
Route::get('/dashboard_user/list_request', [StudentController::class, 'listRequest']);
Route::get('/dashboard_user/create_request', [StudentController::class, 'makeRequest']);
Route::get('/dashboard_user/edit_request/{id}', [StudentController::class, 'editRequest']);
Route::post('/dashboard_user/store_request', [StudentController::class, 'storeRequest']);
Route::post('/dashboard_user/edit_request/{id}', [StudentController::class, 'updateRequest']);

// Lecture
Route::get('/dashboard_lecture', [LectureController::class, 'index'])->middleware('lecture');
Route::get('/dashboard_lecture/viewrequest/{id}', [LectureController::class, 'viewRequest'])->middleware('lecture');
Route::post('/acceptlecture/{id}', [LectureController::class, 'accept']);
Route::post('/rejectlecture/{id}', [LectureController::class, 'reject']);

// Lecture (Dosen Pembimbing)
Route::get('/dashboard_dosbing', [LectureController::class, 'index_dosbing']);
Route::get('/dashboard_dosbing/viewrequest/{id}', [LectureController::class, 'viewRequestDosbing']);
Route::post('/acceptdosbing/{id}', [LectureController::class, 'acceptDosbing']);
Route::post('/rejectdosbing/{id}', [LectureController::class, 'rejectDosbing']);

// Lecture (Dosen Penguji)
Route::get('/dashboard_dospeng', [LectureController::class, 'index_dospeng']);
Route::get('/dashboard_dospeng/viewrequest/{id}', [LectureController::class, 'viewRequestDospeng']);
Route::post('/acceptdospeng/{id}', [LectureController::class, 'acceptDospeng']);
Route::post('/rejectdospeng/{id}', [LectureController::class, 'rejectDospeng']);



// Admin
Route::get('/dashboard_admin', [AdminController::class, 'index2'])->middleware('admin');
Route::get('/dashboard_admin/viewrequest/{id}', [AdminController::class, 'viewRequest'])->middleware('admin');
Route::post('/acceptadmin/{id}', [AdminController::class, 'accept']);
Route::post('/rejectadmin/{id}', [AdminController::class, 'reject']);

Route::get('/dashboard_admin/schedule', [AdminController::class, 'scheduleIndex']);
Route::get('/dashboard_admin/schedule/viewrequest/{id}', [AdminController::class, 'viewRequestSchedule']);
Route::post('/dashboard_admin/schedule/setschedule/{id}', [AdminController::class, 'setSchedule']);


// Kalab
Route::get('/dashboard_kalab', [KalabController::class, 'index']);
Route::get('/dashboard_kalab/viewrequest/{id}', [KalabController::class, 'viewRequest']);

Route::post('/acceptkalab/{id}', [KalabController::class, 'accept']);
Route::post('/rejectkalab/{id}', [KalabController::class, 'reject']);

