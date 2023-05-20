<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpodStoreController;
use App\Http\Controllers\InstagramAuthController;
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
Route::get('/store', [SpodStoreController::class, 'callSpodProductsApi']);

Route::get('instagram-get-auth',[InstagramAuthController::class, 'show'])
    ->middleware('auth');
Route::get('instagram-auth-response', [InstagramAuthController::class, 'complete'])
    ->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
