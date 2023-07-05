<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\album;
use App\Models\article;
use App\Models\broadcast;
use App\Models\division;
use App\Models\headnewspage;
use App\Models\liveBroadcast;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livebroadcast = liveBroadcast::where('is_live', 1)->get();
        $divisions = division::all();
        $midNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', DB::raw('COUNT(views.id) as view_count'))
            ->groupBy('top_news.id')
            ->first();

        $firstleftNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', DB::raw('COUNT(views.id) as view_count'))
            ->groupBy('articles.id', 'top_news.id')
            ->skip(1)
            ->take(1)
            ->first();



        $secondleftNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', DB::raw('COUNT(views.id) as view_count'))
            ->groupBy('top_news.id')
            ->skip(2)
            ->take(1)
            ->first();

        $firstrightNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', DB::raw('COUNT(views.id) as view_count'))
            ->groupBy('top_news.id')
            ->skip(3)
            ->take(1)
            ->first();

        $secondrightNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', DB::raw('COUNT(views.id) as view_count'))
            ->groupBy('top_news.id')
            ->skip(4)
            ->take(1)
            ->first();

        $scrollingrecentnews = Article::withCount('view')
            ->latest()
            ->take(3)
            ->get();

        $otherLatestNews = Article::latest()
            ->whereNotIn('id', $scrollingrecentnews->pluck('id'))
            ->take(3)
            ->get();

<<<<<<< HEAD
        $broadcasts = broadcast::all();
        $videos = video::latest()->take(3)->get();
=======
        $broadcasts = Broadcast::orderBy('created_at', 'desc')->get();

        $videos = Video::latest()->take(3)->get();

        $albums = album::all();
>>>>>>> dev-tiara

        return view('homepage.index')->with(compact(
            'midNews',
            'firstleftNews',
            'secondleftNews',
            'firstrightNews',
            'secondrightNews',
            'scrollingrecentnews',
            'otherLatestNews',
            'broadcasts',
<<<<<<< HEAD
            'videos'
=======
            'livebroadcast',
            'videos',
            'divisions',
            'albums'

>>>>>>> dev-tiara
        ));
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
