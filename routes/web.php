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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/categories', [
    'uses' => 'CategoriesController@index',
    'as' => 'categories.index'
]);
Route::get('/categories/create', [
    'uses' => 'CategoriesController@create',
    'as' => 'categories.create'
]);
Route::post('/categories/store', [
    'uses' => 'CategoriesController@store',
    'as' => 'categories.store'
]);
Route::get('/categories/edit/{category}', [
    'uses' => 'CategoriesController@edit',
    'as' => 'categories.edit'
]);
Route::put('/categories/{category}', [
    'uses' => 'CategoriesController@update',
    'as' => 'categories.update'
]);
Route::delete('/categories/{category}', [
    'uses' => 'CategoriesController@destroy',
    'as' => 'categories.delete'
]);

Route::get('/project', [
    'uses' => 'ProjectController@index',
    'as' => 'project.index'
]);
Route::get('/project/create', [
    'uses' => 'ProjectController@create',
    'as' => 'project.create'
]);
Route::post('/project/store', [
    'uses' => 'ProjectController@store',
    'as' => 'project.store'
]);
Route::get('/project/edit/{project}', [
    'uses' => 'ProjectController@edit',
    'as' => 'project.edit'
]);
Route::put('/project/{project}', [
    'uses' => 'ProjectController@update',
    'as' => 'project.update'
]);
Route::delete('/project/{project}', [
    'uses' => 'ProjectController@destroy',
    'as' => 'project.delete'
]);

Route::get('/photo', [
    'uses' => 'PhotoController@index',
    'as' => 'photos.index'
]);
Route::get('/photo/create', [
    'uses' => 'PhotoController@create',
    'as' => 'photos.create'
]);
Route::post('/photo/store', [
    'uses' => 'PhotoController@store',
    'as' => 'photos.store'
]);
Route::get('/photo/edit/{photo}', [
    'uses' => 'PhotoController@edit',
    'as' => 'photos.edit'
]);
Route::put('/photo/{photo}', [
    'uses' => 'PhotoController@update',
    'as' => 'photos.update'
]);
Route::delete('/photo/{photo}', [
    'uses' => 'PhotoController@destroy',
    'as' => 'photos.delete'
]);

Route::get('/page', [
    'uses' => 'PageController@index',
    'as' => 'pages.index'
]);
Route::get('/page/create', [
    'uses' => 'PageController@create',
    'as' => 'pages.create'
]);
Route::post('/page/store', [
    'uses' => 'PageController@store',
    'as' => 'pages.store'
]);
Route::get('/page/edit/{page}', [
    'uses' => 'PageController@edit',
    'as' => 'pages.edit'
]);
Route::put('/page/{page}', [
    'uses' => 'PageController@update',
    'as' => 'pages.update'
]);
Route::delete('/page/{page}', [
    'uses' => 'PageController@destroy',
    'as' => 'pages.delete'
]);

Route::get('/front', [
    'uses' => 'FrontController@index',
    'as' => 'front.index'
]);
Route::get('/', [
    'uses' => 'FrontController@glowna',
    'as' => 'front.glowna'
]);
Route::get('/omnie', [
    'uses' => 'FrontController@omnie',
    'as' => 'front.omnie'
]);
Route::get('/kontakt', [
    'uses' => 'FrontController@kontakt',
    'as' => 'front.kontakt'
]);
Route::get('/projekty', [
    'uses' => 'FrontController@projekt',
    'as' => 'front.projekt'
]);
Route::get('/fotografia', [
    'uses' => 'FrontController@photo',
    'as' => 'front.photo'
]);
Route::get('/fotografia/{category}', [
    'uses' => 'FrontController@byCategory',
    'as' => 'front.bycategory'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
