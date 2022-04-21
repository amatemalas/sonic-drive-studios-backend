<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WorkController;


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

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('custom-login', 'customLogin')->name('login.custom');
    Route::get('registration', 'registration')->name('register-user');
    Route::post('custom-registration', 'customRegistration')->name('register.custom');
    Route::get('signout', 'signOut')->name('signout');
    Route::get('/dashboard', 'dashboard')->name('backend.index')->middleware('auth');
});

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/settings', 'settings')->name('settings');
        Route::get('/profile', 'profile')->name('profile');
    });

    Route::resource('users', UserController::class);

    Route::resource('contacts', ContactController::class);

    Route::get('/contacts/paginate/{page?}', [ContactController::class, 'pagination'])
        ->name('contacts.paginate');

    Route::resource('works', WorkController::class);

    Route::get('/works/paginate/{page?}', [ContactController::class, 'pagination'])
        ->name('works.paginate');

    Route::get('/calendar', function () {
        return view('backend.calendar');
    })->name('backend.calendar');
});




