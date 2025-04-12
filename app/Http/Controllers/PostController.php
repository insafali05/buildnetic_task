<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Events\PostCreated;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('user')->paginate(10);
        return response()->json($posts);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body'     => $request->body,
            'user_id'  => Auth::id(),
        ]);

        event(new PostCreated($post));

        return response()->json([
            'message' => 'Post created successfully.',
            'post' => $post,
        ], 201);
    }
}
