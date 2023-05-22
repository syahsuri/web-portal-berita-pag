<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\division;
use App\Models\video;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $mostViewedArticles = View::select('articles.judul', 'views.article_id', DB::raw('SUM(views.views) as total_views'))
            ->join('articles', 'articles.id', '=', 'views.article_id')
            ->groupBy('views.article_id', 'articles.judul')
            ->orderByDesc('total_views')
            ->take(5)
            ->get();

        $labels = $mostViewedArticles->pluck('judul');
        $data = $mostViewedArticles->pluck('total_views');

        $chartData = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => '# of Views',
                    'data' => $data,
                    'borderWidth' => 1,
                ],
            ],
        ];



        $divisions = division::withCount('articles')->get();
        return view('dashboard.index')->with(compact('articleCount', 'authorCount', 'imageCount', 'videoCount', 'divisions', 'chartData', 'mostViewedArticles'));
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
