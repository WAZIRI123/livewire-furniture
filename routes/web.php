<?php

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

Route::get('/', \App\Http\Livewire\home::class);
Route::get('about', \App\Http\Livewire\about::class);
Route::get('shop', \App\Http\Livewire\shop::class);
Route::get('team', \App\Http\Livewire\team::class);

