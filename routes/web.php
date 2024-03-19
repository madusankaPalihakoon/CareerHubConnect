<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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
// All Listing
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/show/{listing}', [ListingController::class, 'show']);

// Show Create Form
Route::get('/create', [ListingController::class, 'create']);

// Store Listing data
Route::post('/store', [ListingController::class, 'store']);


