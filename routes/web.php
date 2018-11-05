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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::get('/our-services', 'HomeController@service')->name('service');


Route::resource('/user-message', 'UserMessageController');
Route::resource('/site', 'SiteInfoController');
Route::resource('/news', 'NewsAndUpdateController');
Route::resource('/project', 'ProjectController');

Route::get('/admin', 'AdminPanelController@index')->name('admin.login');
Route::get('/admin/dashboard', 'AdminPanelController@dashboard')->name('dashboard');
Route::get('/admin/user-message', 'AdminPanelController@message')->name('message');
Route::get('/admin/update-site-info', 'AdminPanelController@siteinfo')->name('update.site');
Route::get('/admin/add-news', 'AdminPanelController@addnews')->name('add.news');
Route::get('/admin/all-news', 'AdminPanelController@allnews')->name('all.news');
Route::get('/admin/add-project', 'AdminPanelController@addproject')->name('add.project');
Route::get('/admin/all-project', 'AdminPanelController@allproject')->name('all.project');

Auth::routes();

