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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pastorate','demo@views');
Route::get('/music','demo@views');
Route::get('/youth','demo@views');
Route::get('/youth','demo@views');
Route::get('/admin/dept_form','demo@dept')->name('dept');
Route::post('/admin/dept_form/store', [

		'uses' => 'demo@store',
		'as' => 'admin.store'

	]);
