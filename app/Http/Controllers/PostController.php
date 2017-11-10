<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index() {

        $post = Post::all();

        return view('posts.index',compact('post'));
    }

    public function show() {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        Post::create(request()->all());

        return redirect('/');
    }
 }
