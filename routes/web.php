<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Post\Index;
use App\Livewire\Post\Create;
use App\Livewire\Post\Edit;

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

Route::get('/', Index::class)->name('post.index');
Route::get('/create', Create::class)->name('post.create');
Route::get('/edit/{id}', Edit::class)->name('post.edit');