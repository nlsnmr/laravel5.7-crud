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

Route::get('/', 'PagesController@home');

 //Route::get('/', function () {
/*     return view('welcome', [
        'tasks' => ['a','b']
    ]); */

/*    $tasks = ['a','b'];

    return view('welcome')->withTasks($tasks);
}); */

Route::resource('projects','ProjectsController')->middleware('can:update,project');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

Route::post('/completed-tasks/{task}','CompletedTasksController@store');
Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
