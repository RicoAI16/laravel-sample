<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display a paginated list of posts
    public function index()
    {
        $posts = Post::paginate(5); // Paginate posts (5 per page)
        return view('posts.index', compact('posts'));
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('posts.create'); // View for creating a post
    }

    // Store a newly created post in the database
    public function store(Request $request)
    {
        // Validate input data and show errors if invalid
        $validated = $request->validate([
            'title' => 'required|max:255', // Title is required with max length 255
            'content' => 'required', // Content is required
        ]);

        // Create a new post in the database
        Post::create($validated);

        // Redirect to the post index with a success message
        return redirect()->route('posts.index')->with('success', __('messages.post_created'));
    }

    // Show the details of a single post
    public function show(Post $post)
    {
        return view('posts.show', compact('post')); // Show the single post
    }

    // Show the form for editing a post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post')); // View for editing a post
    }

    // Update the specified post in the database
    public function update(Request $request, Post $post)
    {
        // Validate the updated data
        $validated = $request->validate([
            'title' => 'required|max:255', // Title is required
            'content' => 'required', // Content is required
        ]);

        // Update the post with validated data
        $post->update($validated);

        // Redirect back with a success message
        return redirect()->route('posts.index')->with('success', __('messages.post_updated'));
    }

    // Remove the specified post from the database
    public function destroy(Post $post)
    {
        $post->delete(); // Delete the post

        // Redirect back with a success message
        return redirect()->route('posts.index')->with('success', __('messages.post_deleted'));
    }
}
