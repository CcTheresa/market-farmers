<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\ChartController;

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

//users
Route::get('/users', [AdminController::class, 'users']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('/user/{id}', [AdminController::class, 'update']);
Route::get('/edit_user/{id}', [AdminController::class, 'edituser']);
Route::post('/update_user/{id}', [AdminController::class, 'updateuser']);
Route::get('/pie', [ChartController::class, 'pieChart']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//incase of anything remember you changed these routes

    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');


    Route::get('dashboard', [FarmerController::class, 'FarmerDashboard'])->name('farmer.dashboard');


    Route::get('vendors/dashboard', [VendorController::class, 'VendorsDashboard'])->name('vendor.dashboard');


