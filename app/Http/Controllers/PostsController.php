<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('dashboard.posts.show-posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.add-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $separator = "-";
        $attributes = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'image',
            'category' => 'required',
        ]);

        $attributes['author'] = Auth::user()->name;
        $attributes['slug'] = str_slug($attributes['title'], $separator);

        Post::create($attributes);

        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        return view('dashboard.posts.show-post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        return view('dashboard.posts.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $separator = "-";
        $attributes = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'image',
            'category' => 'required',
        ]);

        $attributes['author'] = Auth::user()->name;
        $attributes['slug'] = str_slug($attributes['title'], $separator);

        $post->update($attributes);

        return redirect('/dashboard/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect('/dashboard/posts');
    }
}
