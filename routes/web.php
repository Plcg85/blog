<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Pagina inicial";
    //comentario prueba
});

Route::get('/posts', function () {
    return "Aqui se mostraran los posts";
});

Route::get('/posts/create', function () {
    return "Aqui se mostrará un formulario para crear un post";
});

Route::get('/posts/{post}', function ($post) {
    return "Aqui se mostrará el post {$post}";
});
