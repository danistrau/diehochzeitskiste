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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/überuns', function () {
    return view('überuns');
});

Route::get('/datenschutz', function () {
    return view('datenschutz');
});

Route::get('/vintage', function () {
    return view('vintage');
});

Route::get('/trachten', function () {
    return view('trachten');
});

Route::get('/klassisch', function () {
    return view('klassisch');
});

Route::get('/freien', function () {
    return view('freien');
});

Route::middleware('auth')->name('checklist.')->prefix('checklist')->group(function() {

    Route::get('', 'ChecklistController@index')->name('index');
    Route::get('/create', 'ChecklistController@create')->name('create');
    Route::post('', 'ChecklistController@store')->name('store');
    Route::get('/{id}', 'ChecklistController@show')->name('show'); 
    Route::get('/{id}/edit', 'ChecklistController@edit')->name('edit');
    Route::put('/{id}', 'ChecklistController@update')->name('update');
    Route::delete('/{id}', 'ChecklistController@destroy')->name('destroy');

});

Route::middleware('auth')->name('budget.')->prefix('budget')->group(function() {

    Route::get('', 'BudgetController@index')->name('index');
    Route::get('/create', 'BudgetController@create')->name('create');
    Route::post('', 'BudgetController@store')->name('store');
    Route::post('', 'BudgetController@mainstore');
    Route::get('/{id}', 'BudgetController@show')->name('show'); 
    Route::get('/{id}/edit', 'BudgetController@edit')->name('edit');
    Route::put('/{id}', 'BudgetController@update')->name('update');
    Route::delete('/{id}', 'BudgetController@destroy')->name('destroy');

});

Route::middleware('auth')->name('usersbudget.')->prefix('usersbudget')->group(function() {

    Route::get('', 'UsersBudgetController@index')->name('index');
    Route::get('/create', 'UsersBudgetController@create')->name('create');
    Route::post('', 'UsersBudgetController@store')->name('store');
    Route::post('', 'UsersBudgetController@mainstore');
    Route::get('/{id}', 'UsersBudgetController@show')->name('show'); 
    Route::get('/{id}/edit', 'UsersBudgetController@edit')->name('edit');
    Route::put('/{id}', 'UsersBudgetController@update')->name('update');
    Route::delete('/{id}', 'UsersBudgetController@destroy')->name('destroy');

});





