<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5); // Paginate posts (5 per page)
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create'); // Show the create post form
    }

    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create a new post
        Post::create($validated);

        return redirect()->route('posts.index')->with('success', __('messages.post_created'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post')); // Show a single post
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post')); // Show the edit form
    }

    public function update(Request $request, Post $post)
    {
        // Validate request data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Update the post
        $post->update($validated);

        return redirect()->route('posts.index')->with('success', __('messages.post_updated'));
    }

    public function destroy(Post $post)
    {
        // Delete the post
        $post->delete();

        return redirect()->route('posts.index')->with('success', __('messages.post_deleted'));
    }
}
