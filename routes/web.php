<?php

Route::get('/', 'Frontend\WorkController@index');
Route::get('/{lang}/works/{slug}', 'Frontend\WorkController@show');
Route::get('/{lang}/designers/{slug}', 'Frontend\DesignerController@show');
Route::get('/{lang}/areas/{slug}', 'Frontend\AreaController@show');
Route::get('/{lang}/types/{slug}', 'Frontend\TypeController@show');
Route::get('/{lang}/categories/{slug}', 'Frontend\CategoryController@show');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'Frontend\LanguageController@switchLang']);

Route::get('/' . config('twill.glide.base_path') . '/{path}', "\App\Http\Controllers\TwillOverride\GlideController")
    ->where('path', '.*');
