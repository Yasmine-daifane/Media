<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController; // Import the DashboardController
use App\Http\Controllers\RechargeController; // Import the RechargeController
use App\Http\Controllers\ServicesController;

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

});

require __DIR__.'/auth.php';





