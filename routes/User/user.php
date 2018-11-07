<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', 'DashboardController@index')->name('user_dashboard');

require __DIR__ . '/Perfil/perfil.php';

// validamos con una macro para que cuando un usuario intente ingresar una url invalida nos arroje
// un error 404 (codigo en RouteServiceProvider)
Route::catch(function (){
    // NotFoundHttpException nos carga la vista 404 siempre y cuando este creada en la carpeta errors
    throw  new NotFoundHttpException;
});