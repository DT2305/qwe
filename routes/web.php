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

// ----------Testing view----------
// Route::view('/candidate', 'candidate/create');

// ----------Candidates----------

Route::get('/candidates',"CandidateController@index");
Route::get('/candidates/create',"CandidateController@create");
Route::post('/candidates',"CandidateController@store");