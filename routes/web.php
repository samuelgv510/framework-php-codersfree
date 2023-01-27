<?php

use Lib\Route;

Route::get('/', function () {
    //return 'hola desde la página principal';
    return [
        'title' => 'Home',
        'content' => 'hola desde la página inicio'
    ];
});

Route::get('/contact', function () {
    return 'hola desde la página de contacto';
});

Route::get('/contact', function () {
    return 'hola desde la página acerca de';
});

Route::get('/courses/:slug', function ($slug) {
    return 'El curso es: ' . $slug;
});
// Route::get('/courses/:slug/:category',function(){
//     echo 'hola desde la página de cursos';
// });

Route::dispatch();
