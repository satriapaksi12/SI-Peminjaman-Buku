<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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
    return view('landingpage');
});


//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
//logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
//Dashboard
Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth', 'verified');



//Register
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerProses']);
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/login');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Profile
Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth');

//Kelola user
Route::get('/user', [UserController::class, 'index'])->middleware(['auth', 'must-superadmin']);
Route::get('/user/{id}', [UserController::class, 'show'])->middleware(['auth', 'must-superadmin']);
Route::get('/user-add', [UserController::class, 'create'])->middleware(['auth', 'must-superadmin']);
Route::post('/user', [UserController::class, 'store'])->middleware(['auth', 'must-superadmin']);
Route::get('/user-edit/{id}', [UserController::class, 'edit'])->middleware(['auth', 'must-superadmin']);
Route::put('/user/{id}', [UserController::class, 'update'])->middleware(['auth', 'must-superadmin']);
Route::delete('/user-destroy/{id}', [UserController::class, 'destroy'])->middleware(['auth', 'must-superadmin']);
Route::get('/user-deleted', [UserController::class, 'deletedUser'])->middleware(['auth', 'must-superadmin']);
Route::get('/user/{id}/restore', [UserController::class, 'restore'])->middleware(['auth', 'must-superadmin']);
Route::get('/export-users', [UserController::class, 'exportUsers'])->middleware(['auth', 'must-superadmin']);
Route::post('/import-users', [UserController::class, 'importUsers'])->middleware(['auth', 'must-superadmin']);

//kelola role
Route::get('/role', [RoleController::class, 'index'])->middleware(['auth', 'must-superadmin']);
Route::get('/role-add', [RoleController::class, 'create'])->middleware(['auth', 'must-superadmin']);
Route::post('/role', [RoleController::class, 'store'])->middleware(['auth', 'must-superadmin']);
Route::get('/role-edit/{id}', [RoleController::class, 'edit'])->middleware(['auth', 'must-superadmin']);
Route::put('/role/{id}', [RoleController::class, 'update'])->middleware(['auth', 'must-superadmin']);
Route::delete('/role-destroy/{id}', [RoleController::class, 'destroy'])->middleware(['auth', 'must-superadmin']);
Route::get('/export-roles', [RoleController::class, 'exportRoles'])->middleware(['auth', 'must-superadmin']);
Route::post('/import-roles', [RoleController::class, 'importRoles'])->middleware(['auth', 'must-superadmin']);

//Kelola Kategori Buku
Route::get('/kategori',[CategoryController::class, 'index'])->middleware(['auth']);
Route::get('/kategori-add',[CategoryController::class, 'create'])->middleware(['auth']);
Route::post('/kategori',[CategoryController::class, 'store'])->middleware(['auth']);
Route::get('/kategori-edit/{id}',[CategoryController::class,'edit'])->middleware(['auth']);
Route::put('/kategori/{id}', [CategoryController::class, 'update'])->middleware(['auth']);
Route::delete('/kategori-destroy/{id}', [CategoryController::class, 'destroy'])->middleware(['auth']);

//Kelola Buku
Route::get('/buku',[BookController::class, 'index'])->middleware(['auth']);
Route::get('/buku-add',[BookController::class, 'create'])->middleware(['auth']);
Route::post('/buku',[BookController::class, 'store'])->middleware(['auth']);
Route::get('/buku-edit/{id}',[BookController::class,'edit'])->middleware(['auth']);
Route::put('/buku/{id}', [BookController::class, 'update'])->middleware(['auth']);
Route::delete('/buku-destroy/{id}', [BookController::class, 'destroy'])->middleware(['auth']);
