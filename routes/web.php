<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\FilieresController;
use App\Http\Controllers\MedcinController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\Sage_femmeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::resource('student', StudentController::class);
Route::resource('departement', DepartementController::class);
Route::resource('personnel', PersonnelController::class);
Route::resource('filiere', FilieresController::class);
Route::resource('medcin', MedcinController::class);
Route::resource('sage-femme', Sage_femmeController::class);