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

Route::get('/', 'Frontend\WorkController@index');
Route::get('/works/{slug}', 'Frontend\WorkController@show');
Route::get('/designers/{slug}', 'Frontend\DesignerController@show');
Route::get('/areas/{slug}', 'Frontend\AreaController@show');
Route::get('/types/{slug}', 'Frontend\TypeController@show');
Route::get('/categories/{slug}', 'Frontend\CategoryController@show');


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'Frontend\LanguageController@switchLang']);
