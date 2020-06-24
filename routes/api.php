<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//

Route::namespace('Notes')->group(function(){

    Route::prefix('notes')->group(function(){
        Route::post('create-new-note', 'NoteController@store');
    });

    Route::prefix('subjects')->group(function(){
        Route::get('','SubjectController@index');//untuk menampilkan data maka menggunakan route Get
    });

    

});


/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */ 
