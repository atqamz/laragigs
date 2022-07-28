<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Listings
Route::get(
    '/listings/manage',
    [ListingController::class, 'manage']
)
    ->middleware('auth');

Route::resource(
    '/listings',
    ListingController::class,
    ['except' => ['index', 'show']]
)
    ->middleware('auth');

Route::resource(
    '/listings',
    ListingController::class,
    ['only' => ['index', 'show']]
);

// Users
Route::get(
    '/register',
    [UserController::class, 'create']
)
    ->middleware('guest');

Route::get(
    '/login',
    [UserController::class, 'login']
)
    ->middleware('guest')
    ->name('login');

Route::post(
    '/auth',
    [UserController::class, 'authenticate']
)
    ->middleware('guest');

Route::post(
    '/logout',
    [UserController::class, 'logout']
)
    ->middleware('auth');

Route::resource(
    '/users',
    UserController::class
);

// Root
Route::get(
    '/',
    function () {
        return redirect('/listings');
    }
);
