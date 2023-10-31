<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', \App\Livewire\Home::class)->name('home');
Route::get('/about', \App\Livewire\About::class)->name('about');
Route::get('/tunggakan', \App\Livewire\Tunggakan::class)->name('tunggakan');
Route::get('/lhp', \App\Livewire\Lhp::class)->name('lhp');
Route::get('/manualfpps/{np2}', \App\Livewire\ManualFpps::class)->name('manualfpps');
Route::get('/login', \App\Livewire\Login::class)->name('login');
Route::get('/konversi', \App\Livewire\Konversi::class)->name('konversi');