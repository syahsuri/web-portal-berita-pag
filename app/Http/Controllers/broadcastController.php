<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\broadcast;
use Illuminate\Http\Request;

class broadcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $broadcasts = Broadcast::orderBy('created_at', 'desc')->get();
        return view('dashboard.insertbroadcast.index')->with(compact('broadcasts'));
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

        $request->validate([
            'deskripsi' => 'nullable',
        ]);

        $broadcast = new broadcast();
        $broadcast->deskripsi = $request->deskripsi;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('broadcast'), $filename);
<<<<<<< HEAD
            $broadcast->image = $filename; // Remove the 'broadcast' prefix from the filename
=======
            $broadcast->image =  $filename; // Update the path to 'images' directory
>>>>>>> dev-tiara
        }

        $broadcast->save();

        // Perform any additional actions or return a response as needed
        return redirect()->back()->with('success', 'Broadcast created successfully');
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
    public function update(Request $request, $id)
    {
        // Find the broadcast to be updated
        $broadcast = Broadcast::findOrFail($id);

        // Get the current image
        $currentImage = $broadcast->image;

        // Update the image field if a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('broadcast'), $filename);
            $broadcast->image = $filename;
        }

        // Update the description field
        $broadcast->deskripsi = $request->input('deskripsi');

        // Save the changes to the database
        $broadcast->save();

        // Delete the old image if a new image is uploaded
        if ($request->hasFile('image') && $currentImage) {
            // Assuming the image is stored in the public/broadcast directory
            $imagePath = public_path('broadcast/' . $currentImage);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Redirect the user to the appropriate route or page
        return redirect()->route('insertbroadcast')->with('success', 'Broadcast successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $broadcasts = broadcast::find($request->id); // find the article based on its ID
        $broadcasts->delete(); // delete the article
        return redirect()->route('insertbroadcast')->with('success', "Berita $broadcasts->judul berhasil dihapus!");
    }
}
