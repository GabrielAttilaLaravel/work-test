<?php
Route::group(['prefix' => 'article', 'namespace' => '\Article'], function (){
    Route::get('/', 'IndexController@index')->name('admin_article_index');
    Route::get('/create', 'CreateController@create')->name('admin_article_create');
    /*
    Route::post('/', 'StoreController@store')->name('article_store');
    Route::get('/create', 'CreateController@create')->name('article_create');
    Route::get('/edit/{id}', 'EditController@edit')->name('article_edit');
    Route::put('/update/{id}', 'UpdateController@update')->name('article_update');
    Route::delete('/{id}', 'DestroyController@destroy')->name('article_destroy');*/
});