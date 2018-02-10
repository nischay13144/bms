<?php

Route::get('/','MovieController@index')->name('home');
Route::get('/movies','MovieController@index');
Route::get('/movies/create','MovieController@create');
Route::get('/movies/{movies}','MovieController@show');
Route::post('/movies','MovieController@store');


Route::get('/theatres','TheatreController@index');
Route::get('/theatres/create','TheatreController@create');
Route::get('/theatres/{theatres}','TheatreController@show');
Route::post('/theatres','TheatreController@store');


Route::post('/movies/{movie}/reviews','ReviewController@store');
Route::get('/movies/genres/{genre}','GenreController@index');

Route::get('/artists','ArtistController@index');
Route::get('/artists/create','ArtistController@create');
Route::get('/artists/{artists}','ArtistController@show');

Route::post('/artists','ArtistController@store');


Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');