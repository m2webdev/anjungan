<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::orderBy('created_at', 'desc')
                ->where('published', true)
                ->paginate(3)
        ]);
    }

    public function show(Post $post)
    {   
        return view('post.show', [
            'post' => $post
        ]);
    }
}