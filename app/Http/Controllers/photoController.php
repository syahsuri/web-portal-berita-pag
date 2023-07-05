<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\article;
use App\Models\division;
use App\Models\liveBroadcast;
use App\Models\photo;
use Illuminate\Http\Request;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livebroadcast = liveBroadcast::where('is_live', 1)->get();
        $divisions = division::all();
        $images = Article::orderBy('created_at', 'desc')->get();
        $albums = album::all();

        return view('homepage.albumfoto.index')->with(compact('divisions','images','livebroadcast','albums'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showphotobyindex(Request $request, $id)
    {
        $divisions = division::all();
        $livebroadcast = liveBroadcast::where('is_live', 1)->get();
        $albums = album::findOrFail($id);
        $photos = photo::where('album_id', $id)->get();

        return view('homepage.photopage.index', compact('photos', 'albums','divisions','livebroadcast'));
    }
}
