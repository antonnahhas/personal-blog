<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;
use Illuminate\Routing\Controllers\Middleware;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Display a view of all of our categories
        $categories = Category::all();

        // It will also have a form to create a new category
        return view('categories.index')->withCategories($categories);
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
        $category = new Category();

        $category->name = $request->name;
        $category->save();

        // Set a flash message
        Session::flash('success', 'New category has been created!');
        // redirect back to index
        return redirect()->route('categories.index');
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
        //
    }
}
