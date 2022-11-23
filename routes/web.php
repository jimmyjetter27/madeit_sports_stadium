<?php

use App\Http\Controllers\AdminController;
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
    Route::view('login', 'admin.login');
//    Route::get('login_page', [AdminController::class, 'login_page']);
    Route::post('login', [AdminController::class, 'login']);
    Route::view('dashboard', 'admin.dashboard')->name('admin-dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin-profile');
    Route::get('logout', [AdminController::class, 'logout'])->name('admin-logout');

    // User Manipulation Routes
    Route::view('users', 'admin.users.users')->name('admin-users');
    Route::view('new_user', 'admin.users.new_user');
    Route::post('create_user', [AdminController::class, 'store']);
    Route::view('edit_user/{id}', 'admin.users.update_user');
    Route::delete('delete_user/{id}', [AdminController::class, 'destroy_user']);

    // Game Manipulation Routes
    Route::view('games', 'admin.games.games')->name('admin-games');
    Route::view('add_game', 'admin.games.add_game')->name('admin-new-game');

});

// Customer Web Routes
Route::post('login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('customer-login');
