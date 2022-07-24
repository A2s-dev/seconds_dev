<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Review\ReviewIndexService;
use App\Services\Review\NovelIndexService;

class ReviewController extends Controller
{
    public function index(ReviewIndexService $reviewIndex)
    {
        $reviews = $reviewIndex->fetchReleased();

        return view('review', compact('reviews'));
    }

    public function showNovel(NovelIndexService $novelIndex, Request $request)
    {
        $novels = $novelIndex->fetchNovel($request);
        $bookmark = $novelIndex->fetchBm($request);

        if (empty($novels)) {
            return redirect()->route('review.index');
        }

        return view('novel', compact('novels', 'bookmark'));
    }
}
