<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        return view('index');
    }

    public function posts() {
        $posts = \App\Post::orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function postsFilter($id) {
        $posts = \App\Post::find($id)->paginate(5);
        return view('posts.index', compact('posts'));
    }
}
