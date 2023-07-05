<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;

class albumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = album::all();
        return view('dashboard.insertalbum.index')->with(compact('albums'));

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
            'title' => 'nullable',
        ]);

        $albums = new album();
        $albums->title = $request->title;
        $albums->save();

        return redirect()->route('insertalbum.store')->with('success', 'Album berhasil ditambah.');
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
        $albums = album::findOrFail($id);

        $albums->title = $request->input('title');

        $albums->save();

        return redirect()->route('addalbum')->with('success', 'Albums successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $albums = album::find($request->id);
        $albums->delete();
        return redirect()->route('addalbum')->with('success', "album $albums->judul berhasil dihapus!");
    }
}
