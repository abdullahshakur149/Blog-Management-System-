<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $categories = Category::with('posts')->findOrFail($id);
        return view('categories')->with('categories', $categories);
    }

    public function showPosts($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $posts = $category->posts()->get();
        return view('categoryposts')->with('posts', $posts);
    }
}
