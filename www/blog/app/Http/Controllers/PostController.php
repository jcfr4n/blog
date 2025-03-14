<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(15);

        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function showByCategory($post, $category = null)
    {
        return view('posts.show', compact('post', 'category'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts');
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $post = Post::find($post);
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();
        return redirect('/posts');
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect('/posts');
    }

}
