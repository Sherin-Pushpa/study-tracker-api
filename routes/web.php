<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\StudyTrackerController;
use App\Http\Controllers\StudentTaskController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | Admin Dashboard
    |--------------------------------------------------------------------------
    */
   Route::get('/admin/dashboard', [StudyTrackerController::class, 'index'])
    ->name('admin.dashboard');
    /*
    |--------------------------------------------------------------------------
    | Study Tracker (Admin)
    |--------------------------------------------------------------------------
    */

    Route::get('/study-tracker', [StudyTrackerController::class, 'index'])
        ->name('study-tracker.index');

    Route::get('/study-tracker/create', [StudyTrackerController::class, 'create'])
        ->name('study-tracker.create');

    Route::post('/study-tracker', [StudyTrackerController::class, 'store'])
        ->name('study-tracker.store');

    Route::get('/study-tracker/{study_tracker}/edit', [StudyTrackerController::class, 'edit'])
        ->name('study-tracker.edit');

    Route::put('/study-tracker/{study_tracker}', [StudyTrackerController::class, 'update'])
        ->name('study-tracker.update');

    Route::delete('/study-tracker/{study_tracker}', [StudyTrackerController::class, 'destroy'])
        ->name('study-tracker.destroy');

    /*
    |--------------------------------------------------------------------------
    | Student Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');

    /*
    |--------------------------------------------------------------------------
    | Student Tasks
    |--------------------------------------------------------------------------
    */

    Route::get('/student/tasks', [StudentTaskController::class, 'index'])
        ->name('student.tasks');

    Route::get('/student/tasks/{task}/edit',
    [StudentTaskController::class, 'edit'])
    ->name('student.tasks.edit');

Route::put('/student/tasks/{task}',
    [StudentTaskController::class, 'update'])
    ->name('student.tasks.update');

    Route::get('/admin/students', [StudyTrackerController::class, 'students'])
    ->name('admin.students');

    Route::get('/admin/remarks', [StudyTrackerController::class, 'remarks'])
    ->name('admin.remarks');

    Route::get('/admin/reports', [StudyTrackerController::class, 'reports'])
    ->name('admin.reports');
});


require __DIR__.'/auth.php';