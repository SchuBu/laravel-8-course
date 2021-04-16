<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartpageController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->active()
            ->limit(5)
            ->get();
        return view('index', compact('posts'));
    }
}
