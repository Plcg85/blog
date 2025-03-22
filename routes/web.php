<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class); //no se le pasa el método porque este controlador solo tiene un metodo invoke

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('prueba', function () {

    //crear nuevo post
    // $post = new Post;
    // $post->title = 'Titulo de prueba 4';
    // $post->content = 'Contenido de prueba 4';
    // $post->categoria = 'Contenido de categoria 4';
    // $post->save();

    //buscar un post por id
    $post = Post::find(4);
    return $post;

    //buscar un post por titulo y modificarlo
    // $post = Post::where('title', 'Titulo de prueba 1')
    //     ->first();
    // $post->categoria = 'Desarrollo web';
    // $post->save();
    // return $post;

    //recuperar mas de un registro
    // $posts = Post::where('id', '>=', '2')->get();
    // return $posts;

    //recuperar post ordenados
    //$posts = Post::orderBy('id', 'desc')->get();
    //return $posts;

    //recuperar solo algunos campos
    //$posts = Post::orderBy('categoria', 'asc')->select('id', 'title', 'categoria')
    //    ->get();
    //return $posts;

    //eliminar registro
    //$post = Post::find(1)->delete();
});
