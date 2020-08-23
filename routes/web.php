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

Route::get('/', 'homepageController@getHomepage')->name('homepage');

Route::get('/download', 'homepageController@getDownload')->name('download');

Route::get('/welcome', 'welcomeController@getwelcome')->name('welcome');

Route::get('/project-helipos', 'projectHeliposController@index')->name('helipos');

Route::get('/project-dashboard', 'projectDashboardController@index')->name('dashboard');

Route::get('/project-borobudur-silver', 'projectBorobudurSilverController@index')->name('borobudur-silver');

Route::get('/project','projectController@index')->name('project');

Route::post('/view-project','projectController@getdataProject');
