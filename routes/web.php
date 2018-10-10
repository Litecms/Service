<?php

// Resource routes  for service
Route::group(['prefix' => set_route_guard('web').'/service'], function () {
    Route::resource('service', 'ServiceResourceController');
});

// Public  routes for service
Route::get('service/popular/{period?}', 'ServicePublicController@popular');
Route::get('services/', 'ServicePublicController@index');
Route::get('service/{slug?}', 'ServicePublicController@show');

