<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Http\Request;

class PostEditService
{
    /**
     *  Browse Selected Posts.
     * 
     * @return $post
     */
    public function fetchPost(Request $request)
    {
        $post = Post::find($request->edit_id);

        return $post;
    }
}
