<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\BusinessNameController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProfileController;
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

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerUser'])->name('register');
Route::post('register', [AuthController::class, 'registerUser'])->name('register');

Route::post('login', [AuthController::class, 'loginUser'])->name('login');
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/edit', [ProfileController::class, 'update'])->name('profile.edit');

    /** Business name generator */
    Route::get('business-name', [BusinessNameController::class, 'index'])->name('business-name');
    Route::get('create/business-name', [BusinessNameController::class, 'createBusinessName'])->name('create.business-name');
    Route::get('generate-business-names', [BusinessNameController::class, 'generateName'])->name('generate-business-name');
    Route::post('save-business-name', [BusinessNameController::class, 'store'])->name('save-name');
    Route::delete('business-name/{business}/delete', [BusinessNameController::class, 'destroy'])->name('delete-name');
});
Route::get('password/reset', [AuthController::class, 'forgotPassword'])->name('password.forgot');
Route::any('/password/{email}/{token}', [
    AuthController::class, "resetPassword"
])->name('password.reset');
