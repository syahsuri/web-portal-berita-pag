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
        $broadcasts = broadcast::all();
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
            $broadcast->image = $filename; // Remove the 'broadcast' prefix from the filename
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
}
