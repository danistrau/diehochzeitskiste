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

Route::get('/inspirationen', function () {
    return view('inspirationen.index');
});

Route::get('/übermich', function () {
    return view('übermich');
});

Route::get('/datenschutz', function () {
    return view('datenschutz');
});

Route::get('inspirationen/{type}', 'InspirationController@show')->name('inspirationenType');


Route::middleware('auth')->middleware('admin')->name('admin.')->prefix('admin')->group(function() {

    Route::get('', 'AdminController@index')->name('index');
    Route::get('/users', 'AdminController@users')->name('users');
    Route::get('/inspirationen', 'AdminController@inspirationen')->name('inspirationen');
    Route::get('/inspirationen/{type}', 'AdminController@inspirationenType')->name('inspirationenType');
    Route::post('/inspirationen/uploadImgs', 'AdminController@uploadImgs')->name('uploadImgs');
    Route::delete('/inspirationen/image', 'AdminController@deleteImage')->name('inspirationen.img.delete');


});

Route::middleware('auth')->name('checklist.')->prefix('checklist')->group(function() {

    Route::get('', 'ChecklistController@index')->name('index');
    Route::get('/create', 'ChecklistController@create')->name('create');
    Route::post('', 'ChecklistController@store')->name('store');
    Route::get('/{id}', 'ChecklistController@show')->name('show'); 
    Route::get('/{id}/edit', 'ChecklistController@edit')->name('edit');
    Route::put('/{id}', 'ChecklistController@update')->name('update');
    Route::delete('/{item}', 'ChecklistController@destroy')->name('destroy');
    Route::post('/{item}/markChecked', 'ChecklistController@markChecked')->name('checked');

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

    Route::post('', 'UsersBudgetController@store')->name('store');
    Route::put('/{usersBudgets}', 'UsersBudgetController@update')->name('update');
    Route::get('/{usersBudgets}/edit', 'UsersBudgetController@edit')->name('edit');
    Route::get('/create/{budget}', 'UsersBudgetController@create')->name('create');


});


Route::name('blogs.')->prefix('blogs')->group(function() {

    Route::get('', 'BlogController@index')->name('index');
    Route::get('/{blog}', 'BlogController@show')->name('show');
});


Route::middleware('auth')->name('blogs.')->prefix('blogs')->group(function() {

    Route::get('/create', 'BlogController@create')->name('create');
    Route::get('/{blog}', 'BlogController@show')->name('show');
    Route::post('', 'BlogController@store')->name('store');
    Route::get('/{blog}/edit', 'BlogController@edit')->name('edit');
    Route::put('/{blog}', 'BlogController@update')->name('update');
    Route::delete('/{blog}', 'BlogController@destroy')->name('destroy');
});

Route::middleware('auth')->name('user.')->prefix('user')->group(function() {

    Route::post('inputBudget/{budget}', 'UserController@inputBudget')->name('inputBudget');
   
});




