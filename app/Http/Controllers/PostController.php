<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index'); // Return a view for the form
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('posts.create'); // Return a view for the form
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        // Create a new post using mass assignment
        $post = Post::create([
            'title' => $request->input('title'), // or simply $request->title
            'content' => $request->input('content'),
        ]);

        // Save the new post to the database
        $post->save();

        // Redirect back with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
