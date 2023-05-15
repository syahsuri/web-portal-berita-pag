<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\division;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = division::all();
        $firstlatestnews = Article::latest()->first();
        $secondlatestnews = Article::latest()->skip(1)->take(1)->first();
        $thirdlatestnews = Article::latest()->skip(2)->take(1)->first();
        $fourthlatestnews = Article::latest()->skip(3)->take(1)->first();
        $fifthlatestnews = Article::latest()->skip(4)->take(1)->first();
        return view('homepage.index')->with(compact('firstlatestnews','secondlatestnews','thirdlatestnews','divisions','fourthlatestnews','fifthlatestnews'));
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
