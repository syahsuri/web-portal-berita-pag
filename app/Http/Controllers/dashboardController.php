<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\video;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authorCount = article::distinct('author')->count('author');
        $articleCount = article::count();
        $imageCount = article::count('thumbnail');
        $videoCount = video::count('video');
        return view('dashboard.index')->with(compact('articleCount','authorCount','imageCount','videoCount'));
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
