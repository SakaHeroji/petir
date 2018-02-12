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




//Route::resource('client','ClientController');
Route::get('hunter/profile', 'HunterController@profile');
Route::get('hunter/mailbox', 'HunterController@mailbox');
Route::get('hunter/compose', 'HunterController@compose');


//bounty
Route::get('bounty/list', 'BountyController@list');
