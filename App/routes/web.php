<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController; // Import the DashboardController
use App\Http\Controllers\RechargeController; // Import the RechargeController
use App\Http\Controllers\ServicesController;
use  App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // Import AdminController


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
    return redirect()->route('register');
});

// Update the dashboard route to use the DashboardController
Route::get('/dashboard', [DashboardController::class, 'index']) // Use the index method
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/recharge', [RechargeController::class, 'store'])->name('recharge.store');


    Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/services/{id}/packs', [ServicesController::class, 'showPacks'])->name('services.packs');


    Route::post('/order', [OrderController::class, 'order'])->name('order.store');






});


// Routes for admin users
Route::prefix('admin')->middleware(['auth', 'role:admin_total'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // ... other admin routes
});

require __DIR__.'/auth.php';


