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
Route::get('/projects', function()
{
    return View::make('pages.projects');
});
Route::get('/contact', function()
{
    return View::make('pages.contact');
});
Route::get('/privacy-policy', function()
{
    return View::make('pages.privacypolicy');
});
Route::get('/article/{id}/{title}', ['as' => 'article.show', 'uses' => 'ArticleController@show']);

Route::get('/category/{name}', ['as' => 'category.show', 'uses' => 'CategoryController@show']);

Route::get('/tag/{name}', ['as' => 'tag.show', 'uses' => 'TagController@show']);

