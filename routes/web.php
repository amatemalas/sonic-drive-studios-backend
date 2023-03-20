<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SongController;
use App\Http\Controllers\Backend\WorkController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ContactController as FrontendContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController as FrontendWorkController;
use App\Http\Controllers\ProductController as FrontendProductController;
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
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/presupuesto', 'calculator')->name('calculator');
});

Route::controller(FrontendContactController::class)->group(function () {
    Route::get('/contacto', 'index')->name('frontend.contact.index');
});

Route::get('about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::controller(CalculatorController::class)->group(function () {
    Route::post('/presupuesto/calculate', 'calculate')->name('calculator.calculate');
});
Route::controller(FrontendWorkController::class)->group(function () {
    Route::get('/trabajos', 'index')->name('frontend.works.index');
    Route::get('/trabajos/{work:slug}', 'show')->name('frontend.works.show');
});
Route::controller(FrontendProductController::class)->group(function () {
    Route::get('/productos', 'index')->name('frontend.products.index');
    Route::get('/productos/{product:slug}', 'show')->name('frontend.products.show');
});

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




