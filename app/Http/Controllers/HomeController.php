<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        $news = News::latest('created_at')->limit(3)->get();
        return view('home', compact('auth', 'news'));
    }
}
