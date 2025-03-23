<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;




Route::get('/', HomeController::class); //no se le pasa el método porque este controlador solo tiene un metodo invoke
Route::apiResource('posts', PostController::class);

//esto era antes de usar Route::resource
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/prueba', function () {

    //buscar un post por id
    $post = Post::find(1);
    //diferentes salidas
    //return $post->created_at->format('d-m-Y');
    //return $post->created_at->diffForHumans();
    //return $post->published_at->format('d-m-Y');
    return $post->is_active;

    //crear nuevo post
    // $post = new Post;
    // $post->title = 'Titulo de prueba 4';
    // $post->content = 'Contenido de prueba 4';
    // $post->categoria = 'Contenido de categoria 4';
    // $post->save();



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
