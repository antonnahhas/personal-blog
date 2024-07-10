<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index')->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'name' => 'required|min:3|max:255',
        ]);
        // Save a new category
        $tag = new Tag();

        $tag->name = $request->name;
        $tag->save();

        // Set a flash message
        Session::flash('success', 'New tag has been created!');
        // redirect back to index
        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        $tag = tag::find($id);

        $tag->delete();

        Session::flash('success', 'The tag was successfully deleted!');

        return redirect()->route('tags.index');
    }
}
