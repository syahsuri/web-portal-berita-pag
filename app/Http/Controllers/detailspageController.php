<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use Illuminate\Http\Request;

class detailspageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $slug)
    {
        $detailsarticles = article::where('slug', $slug)->firstOrFail();
        return view('homepage.detailberita.index')->with(compact('detailsarticles'));
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
