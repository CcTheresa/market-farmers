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

Route::middleware(['auth'])->group(function () {

//users
Route::get('/users', [AdminController::class, 'users']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('/user/{id}', [AdminController::class, 'update']);
Route::get('/edit_user/{id}', [AdminController::class, 'edituser']);
Route::post('/update_user/{id}', [AdminController::class, 'updateuser']);
Route::get('/pie', [ChartController::class, 'pieChart']);
});




//profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//authentication routes

require __DIR__.'/auth.php';

//incase of anything remember you changed these routes
Route::middleware(['auth', 'role:admin'])->group(function () {
 
    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});
//Farmers routes
    Route::middleware(['auth', 'role:farmer'])->group(function () {
     //dashboard
    Route::get('farmer/dashboard', [FarmerController::class, 'FarmerDashboard'])->name('farmer.dashboard');
   //show order form
    Route::get('farmer/orders/{id}/show', [FarmerController::class, 'showOrderForm'])->name('farmer.orders.show');
    //accept order
    Route::post('farmer/orders/{id}/accept', [FarmerController::class, 'acceptOrder'])->name('farmer.orders.accept');
    });


    Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('vendors/dashboard', [VendorsController::class, 'VendorsDashboard'])->name('vendor.dashboard');
    Route::post('vendors/demands', [VendorsController::class, 'store'])->name('vendor.demands.store');
    });

    // Dashboard route accessible to authenticated and verified users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
