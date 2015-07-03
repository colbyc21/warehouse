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

Route::get('/', 'TodoListController@index');
Route::resource('todos', 'TodoListController');
/*Route::get('/db', function(){

	 $result = DB::table('todo_lists')->where('name', 'Your List')->first();
	 return $result->name;
}
);
*/