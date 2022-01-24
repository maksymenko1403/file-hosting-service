<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutoCompleteController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PreviewController;
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

Route::get('/',HomePageController::class)->name('home');

Route::resource('files',FileController::class);
Route::get('myfiles',[FileController::class,'userFiles'])->name('myfiles');


Route::get('/autocomplete',AutoCompleteController::class)->name('autocomplete');
Route::get('private/{file}',PreviewController::class)->name('preview');
Route::get('download/{file}',DownloadController::class)->name('download');
Route::get('/admin',[AdminController::class,'index'])->name('admin');


