<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Create a variable and store all the blog posts in it from the database
        $posts = Post::all();    

        // Return a view and pass in the above variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // step1: validate data
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        // step2: store to database
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        Session::flash('success', 'The blog post was successfully saved!');

        // step3: redirect to another page

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * resource == post in the project's case
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the post in the db and save it as a variable
        $post = Post::find($id);
        // return the view
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
