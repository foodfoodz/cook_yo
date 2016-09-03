<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\TaskList;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('index');
});

Route::get('/lists', function() {
  return view('lists');
});

// Create a list
Route::post('/list', function(Request $request) {

});

// Remove a list
Route::delete('/list/{list}', function(TaskList $list) {

});
