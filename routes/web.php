<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('home');
})->name('landingPage');

Route::get('/daftar', function () {
    return view('daftar');
});

Route::resource('students', StudentController::class);

//Route::get('/students/cetakpdf', [App\Http\Controllers\StudentController::class, 'cetakpdf']);
Route::get('/students/print/{id}', [StudentController::class, 'cetakpdf'])->name('cetakpdf');
