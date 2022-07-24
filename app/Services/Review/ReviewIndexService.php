<?php

namespace App\Services\Review;

use App\Models\Post;

class ReviewIndexService
{
    /**
     * Refer to data with Status of 1 from Post table.
     * 
     * @return value
     */
    public function fetchReleased()
    {
        return Post::where('status', '1')
            ->latest('released_at')
            ->with('bookmarks')
            ->paginate(10);
    }
}
