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

Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);

Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
Route::get('article/{id}/{name}', ['as' => 'article.index', 'uses' => 'ArticleController@index']);

Route::get('category/{name}', ['as' => 'category.index', 'uses' => 'CategoryController@index']);

