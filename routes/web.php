<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
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


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', ['userid' => Auth::id()]);
    })->name('dashboard');
    Route::get('/subscriptions', [SubscriptionController::class, 'edit'])->name('subscriptions');
    Route::put('/subscriptions', [SubscriptionController::class, 'update']);
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses');
    Route::post('/courses', [CourseController::class, 'store']);
});

require __DIR__.'/auth.php';
