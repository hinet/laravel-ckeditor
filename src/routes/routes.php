<?php

Route::group(['namespace'=>'Hinet\Ckeditor\Controller'],function(){

    Route::post('/ckeditor/upload', 'CkeditorController@upload');
    Route::get('/ckeditor.config.js', ['as' => 'ckeditor.config','uses' => 'CkeditorController@config']);

});