<?php

namespace App\Services\Review;

use App\Models\Post;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class NovelIndexService
{
    /**
     *  Selected novels and novels refer to bookmark flags.
     * 
     * @return $novels,$bookmark
     */
    public function fetchNovel(Request $request)
    {
        $novel = Post::find($request->id);

        return $novel;
    }
    public function fetchBm(Request $request)
    {
        $bm = Bookmark::where('post_id', $request->id)->where('user_id', auth()->user()->id)->first();

        return $bm;
    }
}
