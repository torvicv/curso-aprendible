<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts, 'title' => 'Blog']);
    }

    public function show(Post $post) {
        $post = Post::findOrFail($post->id);
        return view('posts.show', ['post' => $post, 'title' => 'Post details']);
    }

    public function create() {
        return view('posts.create', ['post' => new Post, 'title' => 'Form post']);
    }

    public function store(SavePostRequest $request) {
        Post::create($request->validated());
        return to_route('blog')->with('status', 'Post creado!!');
    }

    public function edit(Post $post) {
        $post = Post::findOrFail($post->id);
        return view('posts.edit', ['post' => $post, 'title' => 'Edit post']);
    }

    public function update(SavePostRequest $request, Post $post) {
        $post->update($request->validated());
        return to_route('show-post', $post)->with('status', '¡¡Post actualizado!!');
    }
}
