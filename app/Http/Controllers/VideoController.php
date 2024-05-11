<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.videos')->with('videos', $videos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.videoscreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'video_title' => 'required|string|max:255',
            'video_link' => 'required|string'
        ]);

        $videos = new Video();

        $videos->video_title = $ValidateData['video_title'];
        $videos->video_link = $ValidateData['video_link'];

        $videos->save();

        return redirect()->route('admin.videos.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $videos = Video::findorFail($id);
        return view('admin.videos.videosedit')->with('videos', $videos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ValidateData = $request->validate([
            'video_title' => 'required|string|max:255',
            'video_link' => 'required|string'
        ]);

        $videos = Video::findorFail($id);

        $videos->video_title = $ValidateData['video_title'];
        $videos->video_link = $ValidateData['video_link'];

        $videos->save();

        return redirect()->route('admin.videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $videos = Video::findorFail($id);
        $videos->delete();
        return redirect()->route('admin.videos.index');
    }
}
