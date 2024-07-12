<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use Session;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Create a variable and store all the blog posts in it from the database
        $posts = Post::orderBy('id', 'desc')->paginate(7);    

        // Return a view and pass in the above variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // step1: validate data
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body' => 'required'
        ]);
        // step2: store to database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;

        $post->save();

        $post->tags()->sync($request->tags, false);

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
        $comments = Comment::where('post_id', $post->id)->get();
        return view('posts.show')->withPost($post)->withComments($comments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the post in the db and save it as a variable
        $post = Post::find($id);

        $categories = Category::all();
        $tags = Tag::all();
        // return the view
        return view('posts.edit')->withPost($post)->withCategories($categories)->withTags($tags);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the data
        $post = Post::find($id);
        if($request->slug == $post->slug){
            $request->validate([
                'title' => 'required|max:255',
                'body' => 'required',
                'category_id' => 'required|integer'
            ]);
        }
        else{
            $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id' => 'required|integer',
                'body' => 'required'
            ]);
        }
        
        // Save the data to the db
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;

        $post->save();

        if(isset($request->tags)) {
            $post->tags()->sync($request->tags);
        }
        else{
            $post->tags()->sync([]);
        }

        
        // Set flash data with a success message
        Session::flash('success', 'The blog post was successfully updated!');
        // Redirect to posts.show

        return redirect()->route('posts.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The blog post was successfully deleted!');

        return redirect()->route('posts.index');
    }
}
