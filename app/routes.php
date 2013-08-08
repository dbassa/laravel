<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// accedir-hi amb http://localhost/laravel/public/index.php/users
Route::get('users', function()
{
	return 'Users!';
});

// per defecte la autenticació es produeix per el email pero
// es pot fer per el camp que vulguis. Aixo es canvia a
// filters.php -> return Auth::basic('name');
Route::get('authtest', array('before'=>'auth.basic',function ()
{
	return View::make('hello');
}));

// http://localhost/laravel/public/index.php/Josy
// Apareixerà una vista amb Hello, Josy. Hem creat la vista show a views
Route::get('{name}',function($name)
{
	return View::make('show')->with('name',$name);
});
