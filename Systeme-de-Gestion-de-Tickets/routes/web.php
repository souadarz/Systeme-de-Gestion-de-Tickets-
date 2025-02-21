<?php

use App\Http\Controllers\ProfileController;
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


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('admin/adminDashboard', function () {
        return view('admin.adminDashboard');
    })->name('admin.adminDashboard');
        Route::get('admin/tickets', function () {
        return view('admin.ticket');
    })->name('admin.tickets');
    });

    Route::middleware(['role:agent'])->group(function () {
        Route::get('agent/agentDashboard', function () {
        return view('agent.agentDashboard');
    })->name('agent.agentDashboard');
    });

    Route::middleware(['role:client'])->group(function () {
        Route::get('client/clientDashboard', function () {
        return view('client.clientDashboard');
    })->name('client.clientDashboard');
    });
});

    
require __DIR__.'/auth.php';
