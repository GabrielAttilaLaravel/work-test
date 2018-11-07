<?php


Route::group(['prefix' => 'users', 'namespace' => '\Users'], function (){
    require __DIR__ . '/Perfil/perfil.php';

    Route::get('/', 'IndexController@index')->name('admin_users_index');
    /*Route::get('/unapproved', 'UnapprovedController@unapproved')->name('admin_comments_unapproved');
    Route::get('/create', 'CreateController@create')->name('admin_comment_create');
    Route::post('/', 'StoreController@store')->name('article_store');
    Route::get('/create', 'CreateController@create')->name('article_create');
    Route::get('/edit/{id}', 'EditController@edit')->name('article_edit');
    Route::put('/update/{id}', 'UpdateController@update')->name('article_update');
    Route::delete('/{id}', 'DestroyController@destroy')->name('article_destroy');*/
});