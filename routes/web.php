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

Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

Route::post('/completed-tasks/{task}','CompletedTasksController@store');
Route::delete('/completed-tasks/{task}','CompletedTasksController@destroy');

/*




Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');
*/