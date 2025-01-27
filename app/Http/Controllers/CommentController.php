<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Store a newly created comment for a post
    public function store(Request $request, Post $post)
    {
        // Validate input data
        $validated = $request->validate([
            'author' => 'required|max:255', // Author is required
            'content' => 'required|max:1000', // Content is required (max 1000 characters)
        ]);

        // Add the validated comment to the post
        $post->comments()->create($validated);

        // Redirect back to the post with success message
        return redirect()->route('posts.show', $post)->with('success', __('messages.comment_added'));
    }

    // Remove the specified comment from a post
    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete(); // Delete the comment

        // Redirect back with success message
        return redirect()->route('posts.show', $post)->with('success', __('messages.comment_deleted'));
    }
}
