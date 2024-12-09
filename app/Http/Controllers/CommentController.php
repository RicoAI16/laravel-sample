<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        // Validate the input
        $validated = $request->validate([
            'author' => 'required|max:255',
            'content' => 'required|max:1000',
        ]);

        // Create the comment associated with the post
        $post->comments()->create($validated);

        // Redirect back to the post with success message
        return redirect()->route('posts.show', $post)->with('success', __('コメントが追加されました。'));
    }

    public function destroy(Post $post, Comment $comment)
    {
        // Delete the comment
        $comment->delete();

        // Redirect back to the post with success message
        return redirect()->route('posts.show', $post)->with('success', __('コメントが削除されました。'));
    }
}

