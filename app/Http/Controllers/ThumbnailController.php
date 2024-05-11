<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thumbnail;
use App\Models\ThumbnailImage;
use Illuminate\Contracts\Support\ValidatedData;

class ThumbnailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thumbnails = Thumbnail::with('thumbnail_images')->get();
        return view('admin.thumbnails.thumbnails')->with('thumbnails', $thumbnails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.thumbnails.thumbnailcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'thumbnail_title' => 'required|string',
            'thumbnail_multiple_images' =>  'required|array',
            'thumbnail_multiple_images.*' =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $thumbnails = new Thumbnail();
        $thumbnails->thumbnail_title = $ValidateData['thumbnail_title'];
        $thumbnails->save();

        if ($request->hasFile('thumbnail_multiple_images')) {
            foreach ($request->file('thumbnail_multiple_images') as $image) {
                $filename = $image->store('images/thumbnail_images', 'public');
                $thumbnails->thumbnail_images()->create([
                    'thumbnail_image_url' => $filename,
                ]);
            }
        }

        return redirect()->route('admin.thumbnails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $thumbnails = Thumbnail::with('thumbnail_images')->findOrFail($id);
        return view('admin.thumbnails.thumbnailshow')->with('thumbnails', $thumbnails);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $thumbnails = Thumbnail::with('thumbnail_images')->findOrFail($id);
        return view('admin.thumbnails.thumbnailedit')->with('thumbnails', $thumbnails);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $thumbnail = Thumbnail::findOrFail($id);

        // Validate request data
        $validatedData = $request->validate([
            'thumbnail_title' => 'required|string',
            'thumbnail_multiple_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_images.*' => 'nullable|string',
        ]);

        $thumbnail->thumbnail_title = $validatedData['thumbnail_title'];
        $thumbnail->save();

        if ($request->has('remove_images')) {
            $removeImageIds = $validatedData['remove_images'];
            ThumbnailImage::whereIn('thumbnail_image_id', $removeImageIds)->delete();
        }

        if ($request->hasFile('thumbnail_multiple_images')) {
            foreach ($request->file('thumbnail_multiple_images') as $image) {
                $filename = $image->store('images/thumbnail_images', 'public');
                $thumbnail->thumbnail_images()->create([
                    'thumbnail_image_url' => $filename,
                ]);
            }
        }

        return redirect()->route('admin.thumbnails.show', ['id' => $thumbnail->thumbnail_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $thumbnail = Thumbnail::findOrFail($id);
        $thumbnail->thumbnail_images()->delete();
        $thumbnail->delete();

        return redirect()->route('admin.thumbnails.index');
    }
}
