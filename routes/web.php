<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\JobList;
use App\Http\Livewire\Admin\JobPostList;
use App\Http\Livewire\Admin\JobPostForm;

Route::view('/', 'welcome');

// Public job listings
Route::get('/jobs', JobList::class)->name('jobs.index');

// Authenticated user dashboard/profile
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Admin-only routes (must be logged in and be an admin)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/jobs', JobPostList::class)
        ->middleware('can:admin-only')
        ->name('admin.jobs.index');

    Route::get('/admin/jobs/create', JobPostForm::class)
        ->middleware('can:admin-only')
        ->name('admin.jobs.create');

    Route::get('/admin/jobs/{job}/edit', JobPostForm::class)
        ->middleware('can:admin-only')
        ->name('admin.jobs.edit');
});

require __DIR__.'/auth.php';
