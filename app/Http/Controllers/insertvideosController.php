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
             'video' => 'required|mimes:mp4,mov,avi|max:51200', // 50 MB limit (50 * 1024 = 51200 kilobytes)
             'deskripsi' => 'nullable',
         ], [
             'video.max' => 'The video size should not exceed 50 MB.',
         ]);

         // Store the video
         if ($request->hasFile('video')) {
             $file = $request->file('video');
             $maxFileSize = 50 * 1024 * 1024; // 50 MB in bytes
             if ($file->getSize() > $maxFileSize) {
                 return redirect()->route('insertvideos')->with('failed', 'The video size should not exceed 50 MB.');
             }

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
        // Find the video to be updated
        $video = Video::findOrFail($id);

        // Update the video's fields with the new data from the form
        $video->judul = $request->input('judul');
        $video->slug = $request->input('slug');
        $video->id_divisi = $request->input('id_divisi');
        $video->author = $request->input('author');

        // Handle the video upload
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $video->video = $filename;
        }

        // Save the changes to the database
        $video->save();


        // Redirect the user to the appropriate route or page
        return redirect()->route('insertvideos')->with('success', 'Video berhasil diupdate.');
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
