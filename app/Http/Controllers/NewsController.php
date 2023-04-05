<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::all();
        $new = News::findOrFail($id);
        $new->view = $new->view + 1;
        $new->update();
        return view('news.show', compact('news', 'new'));
    }
}
