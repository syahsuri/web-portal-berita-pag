<?php

namespace App\Http\Controllers;

use App\Models\liveBroadcast;
use App\Models\view;
use Illuminate\Http\Request;

class beritafungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livebroadcast = liveBroadcast::where('is_live', 1)->get();
        $mostViews = View::with('article.division')
        ->orderBy('views', 'desc')
        ->take(5)
        ->get();

    return view('homepage.beritafungsi.index')->with(compact('mostViews','livebroadcast'));

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
}
