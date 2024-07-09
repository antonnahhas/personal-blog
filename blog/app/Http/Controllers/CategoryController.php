<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Routing\Controllers\Middleware;

class CategoryController extends Controller
{

    public static function middleware(): array
    {
        return [
            new Middleware(middleware: 'auth'),
        ];
    }

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
        // Save a new category
        // redirect back to index
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
