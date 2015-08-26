# Slideshow Package for Laravel 5
This package provide a simple image slideshow with backend management for Laravel 5 web appliaction.
## Installation

Require this package with Composer

`composer require 'quandt/slider:dev-master'`

Add these ServiceProviders to the providers array in app/config/app.php

`'QuanDT\Slider\SliderServiceProvider',
 'Intervention\Image\ImageServiceProvider',
`

Add this to the aliases array in app/config/app.php:

`'Image' => 'Intervention\Image\Facades\Image'`

You need to copy migration files to /database/migrations folder, using the following artisan command:

`php artisan vendor:publish --tag=migration --force`

Then copy assets to /public folder:

`php artisan vendor:publish --tag=asset --force`

You can override the default views by copying to the resources/views/packages/quandt/slider folder. You can also do that with the following command:

`php artisan vendor:publish --tag=view --force` 

You can override the default config too (file config will be copied to /config/slider.php):

`php artisan vendor:publish --tag=config --force`

## Usage

Run artisan migrate command to create database for this slide:

`php artisan migrate`

First you need to create a slider, access the following url:

`http://yourwebsite.com/slider`

Then you can add items for the slider you just create (assume your slider ID is 1):

`http://yourwebsite.com/slider-content/create?slider_id=1`

After that, you can preview your slider by access this url:

`http://yourwebsite/slider/display/1`

That's it!
