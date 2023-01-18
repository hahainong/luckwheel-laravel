<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Home\Controllers',
    'middleware' => 'web',
], function() {
    Route::get('/', 'HomeController@welcome')->name('home.welcome');

    Route::group([
    ], function () {
        Route::get('', 'HomeController@index')->name('client.home.index');
    });
});
