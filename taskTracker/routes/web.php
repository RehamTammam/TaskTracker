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

//momken a3ml load ll viw mn al route 3ltoul 

Route::get('/', function () {
    return view('welcome');
});


// w momken a3ml function f al controllr hya aly bt3ml load ll view


Route::get ('/',"taskTracker@loadWelcomeView");
Route::get ('/viewTasks',"taskTracker@loadViewTasks");
Route::get ('/addTask',"taskTracker@loadAddTask");
Route::post ('/show',"taskTracker@showTask");
Route::get('task/{id}',"taskTracker@loadTaskDetails");
 
