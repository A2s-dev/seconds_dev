<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        if (strpos(auth()->user()->email, "@seconds.jp")) {
            return view('news_post');
        } else {
            return redirect()->route('home')->with('message', 'Available only to admin or guest user.');
        }
    }

    public function store(NewsRequest $request)
    {
        News::create([
            'title' => $request->title,
        ]);

        return redirect()->route('news.index')->with('messages');
    }
}
