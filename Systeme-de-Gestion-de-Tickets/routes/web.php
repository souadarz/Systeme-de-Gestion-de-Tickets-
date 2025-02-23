<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
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
        Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
        Route::get('admin/tickets', function () {
        return view('admin.tickets');
    })->name('admin.tickets');
    });

    Route::middleware(['role:agent'])->group(function () {
        Route::get('agent/dashboard', function () {
        return view('agent.dashboard');
    })->name('agent.dashboard');
    });

    Route::middleware(['role:client'])->group(function () {
        Route::get('client/dashboard', function () {
        return view('client.dashboard');
    })->name('client.dashboard');
        Route::get('client.createTicket', function () {
        return view('client.createTicket');
    })->name('client.createTicket');
    });
});

Route::get('/admin/tickets', [TicketController::class, 'showTicket'])->name('admin.tickets');
Route::get('/client/mesTickets', [TicketController::class, 'showTicketsClient'])->name('client.tickets');


    
require __DIR__.'/auth.php';
