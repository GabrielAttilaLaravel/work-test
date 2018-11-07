<?php

Route::group(['prefix' => 'perfil', 'namespace' => '\Perfil'], function (){
    Route::get('/edit/{usr}', 'EditController@edit')->name('admin_user_perfil_edit');
    /*Route::get('/edit', 'EditController@edit')->name('user_perfil_edit');
    Route::put('/update/{id}', 'UpdateController@update')->name('user_update');
    Route::get('/avatar/{id}', 'UpdateController@avatar')->name('user_avatar');*/
});