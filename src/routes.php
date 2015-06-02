<?php

Route::get('slider', 'QuanDT\Slider\SliderController@index');
Route::get('slider-content/create', 'QuanDT\Slider\SliderImagesController@form');
Route::post('slider-content/create', 'QuanDT\Slider\SliderImagesController@update');