<?php

Route::get('slider', 'QuanDT\Slider\SliderController@index');
Route::get('slider/select-type', 'QuanDT\Slider\SliderController@getSelectType');
Route::get('slider/create', 'QuanDT\Slider\SliderController@form');
Route::post('slider/create', 'QuanDT\Slider\SliderController@update');
Route::get('slider/{id}/edit', 'QuanDT\Slider\SliderController@form');
Route::post('slider/{id}/edit', 'QuanDT\Slider\SliderController@update');
Route::get('slider/{id}/delete', 'QuanDT\Slider\SliderController@delete');
Route::get('slider/{id}/content', 'QuanDT\Slider\SliderImagesController@index');

Route::get('slider-content', 'QuanDT\Slider\SliderImagesController@index');
Route::get('slider-content/create', 'QuanDT\Slider\SliderImagesController@form');
Route::post('slider-content/create', 'QuanDT\Slider\SliderImagesController@update');
Route::get('slider-content/edit/{id}', 'QuanDT\Slider\SliderImagesController@form');
Route::post('slider-content/edit/{id}', 'QuanDT\Slider\SliderImagesController@update');
Route::get('slider-content/{id}/delete', 'QuanDT\Slider\SliderImagesController@delete');

Route::get('slider/display/{id}', 'QuanDT\Slider\SliderController@display');
