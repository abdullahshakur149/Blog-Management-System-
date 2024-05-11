<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.testimonials')->with('testimonials', $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.testimonials.testimonialscreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'testimonials_title' => 'required|string|max:255',
            'testimonials_description' => 'required|string|max:500',
            'testimonials_summernote' => 'required|string|max:100',
        ]);

        $testimonials = new Testimonials();

        $testimonials->testimonials_title = $ValidateData['testimonials_title'];
        $testimonials->testimonials_description = $ValidateData['testimonials_description'];
        $testimonials->testimonials_summernote = $ValidateData['testimonials_summernote'];

        $testimonials->save();

        return redirect()->route('admin.testimonials.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonials = Testimonials::findorFail($id);
        return view('admin.testimonials.testimonialsdetail')->with('testimonials', $testimonials);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonials = Testimonials::findorFail($id);
        return view('admin.testimonials.testimonialsedit')->with('testimonials', $testimonials);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ValidateData = $request->validate([
            'testimonials_title' => 'required|string|max:255',
            'testimonials_description' => 'required|string|max:500',
            'testimonials_summernote' => 'required|string|max:100',
        ]);

        $testimonials = Testimonials::findorFail($id);

        $testimonials->testimonials_title = $ValidateData['testimonials_title'];
        $testimonials->testimonials_description = $ValidateData['testimonials_description'];
        $testimonials->testimonials_summernote = $ValidateData['testimonials_summernote'];

        $testimonials->save();

        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $testimonials = Testimonials::findorFail($id);
        $testimonials->delete();

        return redirect()->route('admin.testimonials.index');
    }
}
