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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Post/publish the article
Route::post('/home',function(){
    ...
});

// Update this specific article
Route::put('/home/{article:id}',function($id){
    ...
})

// Delete a specific article
Route::delete('/home/{article:id}',function($id){
    ...
});