<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SongController;
use App\Http\Controllers\Backend\WorkController;
use App\Http\Controllers\WorkController as FrontendWorkController;
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

// FRONTEND
Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/trabajos', [FrontendWorkController::class, 'index'])->name('frontend.works.index');

// BACKEND
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('custom-login', 'customLogin')->name('login.custom');
    Route::get('registration', 'registration')->name('register-user');
    Route::get('signout', 'signOut')->name('signout');
    Route::get('/dashboard', 'dashboard')->name('backend.index')->middleware('auth');
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/settings', 'settings')->name('settings');
        Route::get('/profile', 'profile')->name('profile');
    });

    Route::resource('users', UserController::class);

    Route::get('/user/cache/clear', [UserController::class, 'clearCache'])
        ->name('user.cache.clear');

    Route::resource('contacts', ContactController::class);

    Route::get('/contacts/paginate/{page?}', [ContactController::class, 'pagination'])
        ->name('contacts.paginate');

    Route::resource('works', WorkController::class);

    Route::get('/works/paginate/{page?}', [WorkController::class, 'pagination'])
        ->name('works.paginate');

    Route::resource('songs', SongController::class);
    
    Route::resource('products', ProductController::class);

    Route::resource('events', EventController::class)->except('index');
    Route::get('/calendar', [EventController::class, 'index'])->name('events.index');

    Route::get('/products/paginate/{page?}', [ProductController::class, 'pagination'])
    ->name('products.paginate');
});




