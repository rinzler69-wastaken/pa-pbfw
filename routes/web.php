<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Project Akhir PBF (Platform Penggalangan Dana Online)
|--------------------------------------------------------------------------
*/

// ==========================================
// 1. FRONTEND / PUBLIK (Template: RoyalHeart)
// ==========================================
Route::get('/', function () {
    return view('landing.index');
})->name('home');

Route::get('/campaigns', function () {
    return view('landing.causes');
})->name('campaigns.index');

Route::get('/campaigns/{id}', function ($id) {
    return view('landing.cause-detail', compact('id'));
})->name('campaigns.show');

Route::get('/donate', function () {
    return view('landing.donate');
})->name('donate');


// ==========================================
// 2. BACKOFFICE / ADMIN (Template: Unikit)
// ==========================================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/campaigns', function () {
        return view('admin.campaigns.index');
    })->name('campaigns.index');

    Route::get('/campaigns/create', function () {
        return view('admin.campaigns.create');
    })->name('campaigns.create');

    Route::get('/donations', function () {
        return view('admin.donations.index');
    })->name('donations.index');
});
