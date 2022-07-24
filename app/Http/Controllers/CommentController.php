<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::where('post_id', $request->post_id)
            ->latest('created_at')
            ->limit(100)
            ->paginate(10);

        return view('comment', compact('comments'));
    }

    public function store(CommentRequest $request)
    {
        Comment::create([
            'user_id' => $request->user()->id,
            'post_id' => $request->post_id,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        Comment::find($request->post_id)->delete();

        return redirect()->back();
    }
}
