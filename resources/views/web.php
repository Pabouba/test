<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\PersonnelController;
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
Route::resource('student', StudentController::class);
Route::resource('produit', ProduitController::class);
Route::resource('departement', DepartementController::class);
Route::resource('personnel', PersonnelController::class);

