<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/admin_home', 'HomeController@admin_home');
Route::get('/admin', 'HomeController@admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@user')->name('user');
Route::post('/save_user', 'HomeController@save_user');
Route::get('/tasker', 'HomeController@tasker')->name('tasker');
Route::get('/task', 'HomeController@task')->name('task');
Route::post('/upload_task','HomeController@upload_task');
Route::post('/edit_task','HomeController@edit_task');
Route::post('/delete','HomeController@delete_task');
Route::post('/addTasker','HomeController@add_tasker');
$router->get('/taskDetail/{id}',[
    'uses' => 'HomeController@detail',
    'as'   => 'detail'
]);


