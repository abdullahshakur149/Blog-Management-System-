<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Models\Post;
use App\Models\Category;
use App\Models\Thumbnail;
use App\Models\ThumbnailImage;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        $categories = Category::all();
        $thumbnails = Thumbnail::with('thumbnail_images')->get();


        $recentposts = Post::with('category')->take(5)->latest()->get();
        return view('index')->with('testimonials', $testimonials)->with('recentposts', $recentposts)->with('categories', $categories)->with('thumbnails', $thumbnails);
    }
}
