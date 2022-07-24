<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class SearchController extends Controller
{
    /**
     * Searching for Post.
     *
     * @return $posts
     */
    public function index(Request $request)
    {
        $key = $request->key;

        if (filled($key)) {
            $searches = Post::where('user_id', Auth::id())->where('title', 'like', "%{$key}%")->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $searches = Post::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('search', compact('searches'));
    }
}
