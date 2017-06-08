<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('foo', function () {
    return view('welcome');
});
/*
what's wrong with this comparing with the example in the Routing content text.
What am I doing wron with the 'return view' function
*/
Route::get('hello', function ()  {
	echo "This is my Home";
});
Route::controller('collection','CollectionController');
