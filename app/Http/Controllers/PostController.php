<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
