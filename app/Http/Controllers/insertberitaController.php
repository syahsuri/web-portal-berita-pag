<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\division;
use App\Models\headnewspage;
use Illuminate\Http\Request;

class insertberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = division::all();
        $topnews = headnewspage::all();
        $articles = article::all();
        return view('dashboard.insertberita.index')->with(compact('divisions', 'articles', 'topnews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = division::all();
        return view('dashboard.insertberita.createberita')->with(compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'slug' => 'required|unique:articles',
            'id_divisi' => 'required',
            'author' => 'required',
            'article' => 'required'
        ]);

        $article = new article();
        $article->judul = $request->judul;
        $article->slug = $request->slug;
        $article->id_divisi = $request->id_divisi;
        $article->author = $request->author;
        $article->article = $request->article;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('thumbnails'), $filename);
            $article->thumbnail = $filename;
        }

        $article->save();

        return redirect()->route('insertberita')->with('success', 'Artikel berhasil disimpan.');
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
    public function edit($id)
    {

        $divisions = division::all();
        $articles = article::find($id);
        $title = "Inventory";
        return view('dashboard.insertberita.editberita')->with(compact('divisions', 'title', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Find the article to be updated
        $article = Article::findOrFail($id);

        // Update the article's fields with the new data from the form
        $article->judul = $request->input('judul');
        $article->slug = $request->input('slug');
        $article->id_divisi = $request->input('id_divisi');
        $article->author = $request->input('author');

        // Handle the thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('thumbnails'), $filename);
            $article->thumbnail = $filename;
        }

        // Update the article's content
        $article->article = $request->input('article');

        // Save the changes to the database
        $article->save();

        // Redirect the user to the updated article's page
        return redirect()->route('insertberita')->with('success', 'Artikel berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $article = article::find($request->id); // find the article based on its ID
        $article->delete(); // delete the article
        return redirect()->route('insertberita')->with('success', "Berita $article->judul berhasil dihapus!"); // redirect with success message
    }

    public function getThumbnail(Request $request)
    {
        $articleId = $request->input('id');
        $article = article::find($articleId);

        if ($article) {
            $thumbnailPath = asset('thumbnails/' . $article->thumbnail);
            return response()->json(['thumbnail' => $thumbnailPath]);
        }

        dd($article);
        return response()->json(['thumbnail' => '']);
    }

    public function topnews(Request $request, headnewspage $headnewspage)
    {
        $article = [
            'id_articles' => $request->id_articles
        ];

        // dd($article);
        headnewspage::where('id', $headnewspage->id)->update($article);

        return redirect()->route('insertberita')->with('success', "Berita berhasil Diganti !");

    }
}
