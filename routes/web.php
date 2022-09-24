<?php

use App\Models\Listing; 
//use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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
//tutti i messaggi
Route::get('/', [ListingController::class, 'index']);

   
// Creata Form
Route::get('/listings/create', [ListingController::class, 'create']);
 
   
//singolo messaggio 
Route::get('/listings/{listing}', [ListingController::class, 'show']);
         

