<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ExploreController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('explore', [ExploreController::class, 'show'])->middleware(['auth', 'verified'])->name('explore');

Route::get('search-tag', [EventController::class, 'searchTag'])->middleware(['auth', 'verified'])->name('tag.search');


Route::get('/event-detail', function () {
    return Inertia::render('EventDetail');
});

Route::get('/members', function () {
    return Inertia::render('pageMember');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/activity.php';
