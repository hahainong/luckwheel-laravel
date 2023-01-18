<?php

use Illuminate\Support\Facades\Route;

Route::group([
    "prefix" => 'user',
    "namespace" => "Cms\Modules\User\Controllers",
    "middleware" => ['web'],
], function () {
    Route::get('/profile/{token}', "UserController@profile")->name('client.user.profile');
    Route::get('/{token}/qr', "UserController@qr")->name('client.user.qr');
    Route::get('/luckwheel/{token}', "UserController@luckwheel")->name('client.user.luckwheel');
    Route::post('/reward', "UserController@reward")->name('client.user.reward');
    Route::get('/list-reward/{token}', "UserController@listReward")->name('client.user.listReward');
});