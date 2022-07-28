<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;
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

Route::post('login', [AuthController::class, 'loginUser'])->name('login');
// Route::group(['middleware' => ['auth']], function () {
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::any('/password/{email}/{token}', [
    AuthController::class, "resetPassword"
])->name('password.reset');
