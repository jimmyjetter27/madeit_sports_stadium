<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\VenueController;
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

Route::middleware(['visit_counter'])->group(function () { // Count every visit
    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

// Admin Routes
    Route::prefix('admin')->group(function () {
        // Profile Routes
        Route::view('login', 'admin.login')->name('admin.login');
        Route::post('login', [AdminController::class, 'login']);

        // Admin Protected Routes
        Route::middleware(['admin_auth'])->group(function () {
            Route::view('dashboard', 'admin.dashboard')->name('admin-dashboard');
            Route::get('profile', [AdminController::class, 'profile'])->name('admin-profile');
            Route::get('logout', [AdminController::class, 'logout'])->name('admin-logout');


            // User Routes
            Route::view('users', 'admin.users.users')->name('admin-users');
            Route::view('new_user', 'admin.users.new_user');
            Route::post('create_user', [AdminController::class, 'store']);
            Route::get('edit_user/{id}', [AdminController::class, 'edit_user']);
            Route::put('update_user/{id}', [AdminController::class, 'update_user']);
            Route::delete('delete_user/{id}', [AdminController::class, 'destroy_user']);


            // Game Routes
            Route::view('games', 'admin.games.games')->name('admin-games');
            Route::view('add_game', 'admin.games.add_game')->name('admin-new-game');
            Route::post('create_game', [GameController::class, 'store']);
            Route::get('edit_game/{id}', [GameController::class, 'edit']);
            Route::put('update_game/{id}', [GameController::class, 'update']);
            Route::delete('delete_game/{id}', [GameController::class, 'destroy']);
        });


        // Venue Routes
        Route::view('venues', 'admin.venues.venues')->name('admin-venues');
        Route::view('add_venue', 'admin.venues.add_venue')->name('admin-new-venue');
        Route::post('create_venue', [VenueController::class, 'store']);
        Route::get('edit_venue/{id}', [VenueController::class, 'edit']);
        Route::put('update_venue/{id}', [VenueController::class, 'update']);
        Route::delete('delete_venue/{id}', [VenueController::class, 'destroy']);


        // Booking Routes
        Route::view('bookings', 'admin.games.games')->name('admin-bookings');
    });



// Customer Web Routes
    Route::view('sports', 'sports', ['games' => \App\Models\Game::query()->latest()->get()]);
    Route::view('login', 'auth.login')->name('login');
    Route::post('login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('customer-login');


// Customer Protected Routes
    Route::middleware(['auth:web'])->group(function () {
        Route::view('dashboard', 'dashboard', ['games' => \App\Models\Game::query()->latest()->get()]);
        Route::view('book', 'book');
        Route::get('logout', [\App\Http\Controllers\CustomerController::class, 'logout']);
    });

});

