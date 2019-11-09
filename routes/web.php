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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inspiriation', function () {
    return view('inspiriation');
});

Route::get('/checklist', function () {
    return view('checklist');
});

Route::get('/budget', function () {
    return view('budget');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/überuns', function () {
    return view('überuns');
});

Route::get('/datenschutz', function () {
    return view('datenschutz');
});

Route::middleware('auth')->name('checklists.')->prefix('checklist')->group(function() {

    Route::resource('checklists', 'ChecklistController');

});