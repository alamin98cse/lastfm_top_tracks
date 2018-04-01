<?php

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

Route::post('/bands','bandsController@listBands');

Route::get('/bands-perpage','bandsController@listBands');

Route::get('/artist-toptracks','bandsController@artistTopTracks');

Route::get('/', ['as' => 'home', function () {
    return view('home.index');
}]);
