<?php

namespace App\Http\Controllers;

use App\Models\division;
use App\Models\liveBroadcast;
use Illuminate\Http\Request;

class livebroadcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = division::all();
        $broadcasts = liveBroadcast::all();
        return view('dashboard.insertlivebroadcast.index')->with(compact('broadcasts', 'divisions'));
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

        $broadcast = new liveBroadcast();
        $broadcast->deskripsi = $request->deskripsi;
        $broadcast->id_divisi = $request->id_divisi;
        $broadcast->save();

        return redirect()->route('insertlivebroadcast')->with('success', 'Broadcast berhasil disimpan.');
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
        $broadcast = liveBroadcast::findOrFail($id);

        $broadcast->deskripsi = $request->input('deskripsi');
        $broadcast->id_divisi = $request->input('id_divisi');

        $broadcast->save();

        return redirect()->route('insertlivebroadcast')->with('success', 'Broadcast successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $broadcasts = liveBroadcast::find($request->id); // find the article based on its ID
        $broadcasts->delete(); // delete the article
        return redirect()->route('addalbum')->with('success', "Broadcast $broadcasts->judul berhasil dihapus!");
    }

    public function toggle(Request $request, $id)
    {
        $isLive = $request->input('is_live');

        // Retrieve the live broadcast record
        $broadcast = LiveBroadcast::find($id);

        if ($broadcast) {
            // Update the is_live status
            $broadcast->is_live = $isLive;
            $broadcast->save();

            return response()->json(['success' => true, 'message' => 'Live broadcast status updated successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Live broadcast not found']);
    }
}
