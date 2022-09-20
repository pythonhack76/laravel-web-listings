<?php

use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    return view('listings');
});
// 
// Route::get('/hello', function() {
    // return response('<h1>Ciao a tutti gli utenti</h1>', 200)
    // ->header('Content-Type', 'text/plain')
    // ->header('foo', 'bar');
// });
// 
// Route::get('/posts/{id}', function($id){
    // return response('Post ' . $id);
// });
// 
// Route::get('/articoli/', function(){
//    
    // return response('Pagina articoli');
// })->where('id', '[0+9]+');
// 
// 
// Route::get('/search', function(Request $request){
    //    return $request->name . ' '. $request->city;
// });
