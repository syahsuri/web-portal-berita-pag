<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\broadcast;
use App\Models\division;
use App\Models\liveBroadcast;
use App\Models\view;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailspageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $slug)
    {
        $divisions = Division::all();
        $livebroadcast = LiveBroadcast::where('is_live', 1)->get();
        $detailsarticles = Article::where('slug', $slug)->firstOrFail();

        // Create a new View record
        $view = new View();
        $view->article_id = $detailsarticles->id;
        $view->viewed_at = Carbon::now();
        $view->save();

        $mostViews = View::with('article.division')
            ->select('article_id', DB::raw('COUNT(*) as view_count'))
            ->groupBy('article_id')
            ->orderBy('view_count', 'desc')
            ->take(5)
            ->get();



        $broadcasts = Broadcast::orderBy('created_at', 'desc')->get();


        // Additional logic...

        return view('homepage.detailberita.index')->with(compact('detailsarticles', 'mostViews', 'livebroadcast', 'divisions', 'broadcasts'));
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
