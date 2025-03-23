<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        //esto se mejora con paginate
        //$posts = Post::orderBy('id', 'desc')
        //    ->get();
        $posts = Post::orderBy('id', 'desc')
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));

        //esto hace lo mismo
        // return view('posts.show', [
        //     'post' => $post
        // ]);
    }

    public function store(StorePostRequest $request)
    {
        // $post = new Post();

        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->category = $request->category;

        // $request->validate([ //regla de validacion
        //     'title' => ['required , min:5 , max:255'],
        //     'slug' => 'required|unique:posts',
        //     'content' => 'required',
        //     'category' => 'required'
        // ],[

        // ],[

        // ]);

        Post::create($request->all());

        //$post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([ //regla de validacion
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => "required|unique:posts,slug,{$post->id}", //para que sea unico pero que se excluya el mismo
            'content' => 'required',
            'category' => 'required'
        ]);

        $post->update($request->all());

        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->category = $request->category;

        // $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
