<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.posts')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.posts.postscreate')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'category_id' => 'required|exists:categories,category_id',
        ]);

        $post = new Post();

        $post->post_title = $ValidatedData['post_title'];
        $post->category_id = $ValidatedData['category_id'];

        $imagePath = $request->file('post_image')->store('images/posts/', 'public');
        $post->post_image = $imagePath;

        $post->save();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('category')->findOrFail($id);
        return view('admin.posts.postsdetails')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $post = Post::with('category')->findOrFail($id);
        $category = Category::all();
        return view('admin.posts.postsedit')->with('post', $post)->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ValidatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'category_id' => 'required|exists:categories,category_id',
        ]);

        $post = Post::findOrFail($id);

        $post->post_title = $ValidatedData['post_title'];
        $post->category_id = $ValidatedData['category_id'];


        if ($request->hasFile('post_image')) {
            if ($post->post_image) {
                Storage::disk('public')->delete($post->post_image);
            }

            // Store the new image
            $imagePath = $request->file('post_image')->store('images', 'public');
            $post->post_image = $imagePath;
        }

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $posts = Post::findorFail($id);
        $posts->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Category deleted successfully.');
    }
}
