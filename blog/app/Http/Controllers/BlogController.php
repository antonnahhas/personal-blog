<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class BlogController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('id', 'desc')->paginate(7);

        return view('blog.index')->withPosts($posts);

    }

    public function getSingle($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        $comments = Comment::all();
        return view('blog.single')->withPost($post)->withComments($comments);
    }
}
