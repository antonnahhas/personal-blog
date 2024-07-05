<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.single')->withPost($post);
    }
}
