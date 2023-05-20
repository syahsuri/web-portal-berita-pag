<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\division;
use App\Models\video;
use Illuminate\Http\Request;



class insertvideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $divisions = division::all();
        $video = video::all();
        return view('dashboard.insertvideos.index')->with(compact('divisions',  'video'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = division::all();
        return view('dashboard.insertvideos.createvideos')->with(compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'slug' => 'nullable',
            'id_divisi' => 'required',
            'author' => 'nullable',
            'video' => 'required|mimes:mp4,mov,avi',
            'deskripsi' => 'nullable',
        ]);

        // Store the video
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $validatedData['video'] = $filename;
        }

        // Create the video using the validated data
        Video::create($validatedData);

        // Redirect or return a response
        return redirect()->route('insertvideos')->with('success', 'Video created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $divisions = division::all();
        $video = video::find($id);;
        return view('dashboard.')->with(compact('divisions',  'video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $divisions = division::all();
        $video = video::find($id);;
        return view('dashboard.insertvideos.editvideos')->with(compact('divisions',  'video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the article to be updated
        $video = video::findOrFail($id);

        // Update the article's fields with the new data from the form
        $video->judul = $request->input('judul');
        $video->slug = $request->input('slug');
        $video->id_divisi = $request->input('id_divisi');
        $video->author = $request->input('author');

        // Handle the videos upload
        if ($request->hasFile('videos')) {
            $file = $request->file('videos');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('video'), $filename);
            $video->thumbnail = $filename;

            // Update the article's content
            $video->article = $request->input('video');

            // Save the changes to the database
            $video->save();

            // Redirect the user to the updated article's page
            return redirect()->route('insertvideos')->with('success', 'Artikel berhasil disimpan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $video = video::find($request->id); // find the article based on its ID
        $video->delete(); // delete the article
        return redirect()->route('insertvideos')->with('success', "Berita $video->judul berhasil dihapus!"); // redirect with success message
    }
}
