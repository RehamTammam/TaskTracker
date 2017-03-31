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
Route::group(['middleware' => 'auth'], function () {
    Route:: get('/addTask',"taskTracker@loadAddTaskView");
    Route::post('/insertTask',"taskTracker@addTask");
    Route::get('/getTasks',"taskTracker@getAllTasks");
    Route::post('/updateTask/{taskId}',"taskTracker@updateTaskContent");
    Route::get('/deleteTask/{taskID}',"taskTracker@deleteTaskContent");
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});