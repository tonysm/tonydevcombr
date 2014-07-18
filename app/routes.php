<?php

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);