<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\photo;
use Illuminate\Http\Request;

class insertPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = album::all();
        $photos = photo::all();
        return view('dashboard.insertfoto.index')->with(compact('photos', 'albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'image' => 'required|image|max:2048',
            'album_id' => 'required|exists:albums,id',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        // Create a new Photo instance
        $photos = new photo();

        // Set the photos properties
        $photos->album_id = $validatedData['album_id'];
        $photos->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('photos'), $filename);
            $photos->image =  $filename; // Update the path to 'images' directory
        }
        // Save the photos record to the database
        $photos->save();


        // Redirect the user or return a response
        return redirect()->back()->with('success', 'Photo added successfully.');
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
        $photos = photo::findOrFail($id);
        $currentImage = $photos->image;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('photos'), $filename);
            $photos->image = $filename;
        }

        $photos->album_id = $request->input('album_id');
        $photos->deskripsi = $request->input('deskripsi');
        $photos->save();

        if ($request->hasFile('image') && $currentImage) {
            $imagePath = public_path('photos/' . $currentImage);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        return redirect()->route('insertphoto')->with('success', 'photo successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $photo = photo::find($request->id); // find the article based on its ID
        $photo->delete(); // delete the article
        return redirect()->route('insertphoto')->with('success', "Berita $photo->judul berhasil dihapus!"); // redirect with success message
    }
}
