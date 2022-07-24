<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::where('user_id', auth()->user()->id)
            ->with('user', 'post')
            ->latest('created_at')
            ->paginate(10);

        return view('bookmark', compact('bookmarks'));
    }

    public function bookmark(Post $post, Bookmark $bookmark)
    {
        $bookmark->post_id = $post->id;
        $bookmark->user_id = Auth::user()->id;
        $bookmark->save();
        return back();
    }

    public function unBookmark(Post $post)
    {
        $user = Auth::user()->id;
        $bookmark = Bookmark::where('post_id', $post->id)->where('user_id', $user)->first();
        $bookmark->delete();
        return back();
    }
}
