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



Route::get('sendMessage', 'ChatController@sendMessage');
Route::get('isTyping', 'ChatController@isTyping');
Route::get('notTyping', 'ChatController@notTyping');
Route::get('retrieveChatMessages', 'ChatController@retrieveChatMessages');
Route::get('retrieveTypingStatus', 'ChatController@retrieveTypingStatus');

Route::get('/{username}', function ($username) {

	//echo 'laravel2';
	//return view('welcome');
	return view('chats', ['username' => $username]);

	//return 'Hello World';

});
