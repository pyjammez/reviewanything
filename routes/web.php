<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PublicReviewController;
use App\Http\Controllers\PublicThingController;
use App\Http\Controllers\PublicUserController;
use App\Http\Controllers\UserReviewController;
use App\Http\Controllers\UserThingController;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminThingController;
use App\Http\Controllers\AdminOrganizationController;

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

// default root path page that came with jetstream. leaving as example
Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

// This is the default one that came with jetstream. Leaving it as an example
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('User/UserDashboard');
})->name('dashboard');

// Public
Route::inertia('/', 'Public/Reviews')->name('home');
Route::resource('reviews', PublicReviewController::class);
Route::resource('things', PublicThingController::class);
Route::resource('users', PublicUserController::class);
Route::inertia('/about', 'Public/About')->name('about');
Route::inertia('/full-width', 'Public/FullWidth')->name('full-width');
Route::inertia('/two-column', 'Public/TwoColumn')->name('two-column');
Route::inertia('/three-column', 'Public/ThreeColumn')->name('three-column');

// Admins (add special middleware for this one. maybe check teams to see
// if user is part of the admin team. Or maybe use the teams feature
// for owners of a Thing, such as a business with multiple staff, or
// a location or product that allows multiple admins to manage it)
Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Admin/AdminDashboard')->name('admin-dashboard');
    Route::resource('users', AdminUserController::class, ['as' => 'admin']);
    Route::resource('things', AdminThingController::class, ['as' => 'admin']);
    Route::resource('reviews', AdminReviewController::class, ['as' => 'admin']);
    Route::resource('organizations', AdminOrganizationController::class, ['as' => 'admin']);
});

// Users
Route::prefix('user')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::inertia('dashboard', 'User/UserDashboard')->name('user-dashboard');
    Route::resource('things', UserThingController::class, ['as' => 'user']);
    Route::resource('reviews', UserReviewController::class, ['as' => 'user']);
});

// we may have to read this https://aboutweb.dev/blog/change-laravel-jetstream-route-paths/