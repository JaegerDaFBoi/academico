<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Redirect;
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
    return Redirect::route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return Redirect::route('materias.index');
    })->name('dashboard');
    Route::resource('/materias',CourseController::class);
    Route::resource('/estudiantes',StudentController::class);
    Route::resource('/notas',NoteController::class);
});
