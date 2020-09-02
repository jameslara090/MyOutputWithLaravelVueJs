<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('invoice', function(){
 //   return view('invoice');
//});

//Route::get('{path}','HomeController@index')->where( 'path', '([A-z\d-/_.]+)?' );

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ExC', 'HomeController@Exc')->name('exc');
Route::get('/expenses', 'HomeController@Expenses')->name('expenses');


Route::resource('/users', 'AjaxCrudController');

Route::post('/users/update', 'AjaxCrudController@update')->name('users.update');

Route::get('/users/destroy/{id}', 'AjaxCrudController@destroy');
