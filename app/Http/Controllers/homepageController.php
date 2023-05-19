<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\division;
use App\Models\headnewspage;
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
        $divisions = division::all();
        $midNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', 'views.views')
            ->first();

        $firstleftNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', 'views.views')
            ->skip(1)
            ->take(1)
            ->first();

        $secondleftNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', 'views.views')
            ->skip(2)
            ->take(1)
            ->first();

        $firstrightNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', 'views.views')
            ->skip(3)
            ->take(1)
            ->first();

        $secondrightNews = DB::table('top_news')
            ->join('articles', 'top_news.id_articles', '=', 'articles.id')
            ->join('divisions', 'articles.id_divisi', '=', 'divisions.id')
            ->leftJoin('views', 'articles.id', '=', 'views.article_id')
            ->select('top_news.*', 'articles.*', 'divisions.nama_divisi as division_name', 'views.views')
            ->skip(4)
            ->take(1)
            ->first();

        $scrollingrecentnews = Article::latest()->take(3)->get();
        $otherLatestNews = Article::latest()
            ->whereNotIn('id', $scrollingrecentnews->pluck('id'))
            ->take(3)
            ->get();

        $videos = video::latest()->take(3)->get();

        return view('homepage.index')->with(compact(
            'midNews',
            'firstleftNews',
            'secondleftNews',
            'firstrightNews',
            'secondrightNews',
            'scrollingrecentnews',
            'otherLatestNews',
            'videos'
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
