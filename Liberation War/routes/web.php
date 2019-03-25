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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LanguageMovement', 'EtihashController@LanguageMovement');
Route::get('/MassUprising', 'EtihashController@MassUprising');
Route::get('/LiberationWar', 'EtihashController@LiberationWar');

Route::get('/1969', function () {
    return view('1969');
})->name('1969');

Route::get('/1971', function () {
    return view('1971');
})->name('1971');


Route::get('/Bongobondhu', 'BongobondhuController@Bongobondhu');


Route::get('/Documents', 'ArchiveController@Documents');
Route::get('/Image', 'ArchiveController@Image');
Route::get('/Video_Footage', 'ArchiveController@VideoFootage');


Route::get('/Freedom_Fighter', 'FreedomFighterController@FreedomFighter');


Route::get('/Books', 'BooksController@Books');

Route::get('/About', 'AboutController@About');

