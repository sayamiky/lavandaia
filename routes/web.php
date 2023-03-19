<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
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


Route::apiResource('/programs', ProgramController::class);
Route::apiResource('/contacts', ContactController::class);
Route::apiResource('/abouts', AboutController::class);
Route::apiResource('/galleries', GalleryController::class);
Route::apiResource('/activities', ActivityController::class);
Route::apiResource('/homes', HomeController::class);
