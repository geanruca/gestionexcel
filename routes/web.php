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

Route::get('/','PagesController@inicio');
Route::get('/contacto','PagesController@contacto');
Route::post('/enviar_contacto','PagesController@enviar_contacto')->name('enviar_contacto');
Route::get('/temario','PagesController@temario');
Route::get('/admin/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
