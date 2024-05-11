<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.categories.categories')->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.CategoriesCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'category_title' => 'required|string|max:255',
            'category_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'category_description' => 'nullable|string',
        ]);


        $category = new Category();
        $category->category_title = $ValidatedData['category_title'];
        $category->category_description = $ValidatedData['category_description'];

        $imagePath = $request->file('category_image')->store('images', 'public');
        $category->category_image = $imagePath;


        $category->save();

        if (!$category->save()) {

            return redirect()->route('admin.categories.create')->with('error', 'Category failed to be added.');
        }

        return redirect()->route('admin.categories.index')->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('admin.categories.categoriesdetails')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findorFail($id);
        return view('admin.categories.categoriesedit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ValidatedData = $request->validate([
            'category_title' => 'required|string|max:255',
            'category_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'category_description' => 'nullable|string',
        ]);

        $category = Category::findorFail($id);
        $category->category_title = $ValidatedData['category_title'];
        $category->category_description = $ValidatedData['category_description'];

        if ($request->hasFile('category_image')) {
            if ($category->category_image) {
                Storage::disk('public')->delete($category->category_image); // Delete from storage
            }

            // Store the new image
            $imagePath = $request->file('category_image')->store('images', 'public'); // Save the new image
            $category->category_image = $imagePath; // Update category with new image path
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $category = Category::findorFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
