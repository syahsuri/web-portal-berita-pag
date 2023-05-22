<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\liveBroadcast;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailspageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $slug)
    {
        $livebroadcast = liveBroadcast::where('is_live', 1)->get();
        $detailsarticles = Article::where('slug', $slug)->firstOrFail();
        $mostViews = View::with('article.division')
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        // Create or update the ArticleView record
        view::updateOrCreate(['article_id' => $detailsarticles->id], ['views' => DB::raw('views + 1')]);

        return view('homepage.detailberita.index')->with(compact('detailsarticles', 'mostViews','livebroadcast'));
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
