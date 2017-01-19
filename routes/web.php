<?php

Route::get('/', function () {
  return view('home');
})->name('home');

Route::resource('users', 'UserController', ['only' => ['create', 'store', 'edit', 'update']]);
Route::resource('posts', 'PostController', ['only' => ['index', 'create', 'store']]);

Route::post('/delete_all_post', [
  'uses' => 'PostController@delete_all_post',
  'as' => 'delete_all_post'
]);

Route::get('/login', [
  'uses' => 'SessionController@getLogin',
  'as' => 'login'
]);

Route::post('/login', [
  'uses' => 'SessionController@postLogin',
  'as' => 'login'
]);

Route::get('/logout', [
  'uses' => 'SessionController@getLogout',
  'as' => 'logout'
]);
