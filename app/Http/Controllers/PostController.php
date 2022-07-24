<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Services\Post\PostEditService;

class PostController extends Controller
{

    public function __construct(PostEditService $editPost, Request $request)
    {
        $this->post = $editPost->fetchPost($request);
    }

    /**
     * Initial display.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get();

        return view('editer', [
            'name' => $this->getLoginUserName(),
            'posts' => $posts,
            'selected' => session()->get('selected'),
        ]);
    }

    /**
     * Deleting a note.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $this->post->delete();
        session()->remove('selected');

        return redirect()->route('post.index');
    }

    /**
     * Update posts.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->post->title = $request->edit_title;
        $this->post->content =  $request->edit_content;

        if ($this->post->update()) {
            session()->put('selected', $this->post);
        } else {
            session()->remove('selected');
        }

        return redirect()->route('post.index')->with('message', 'Update Complete');
    }

    /**
     * Add a posts.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add()
    {
        Post::create([
            'user_id' => Auth::id(),
            'title' => '',
            'content' => '',
        ]);

        return redirect()->route('post.index');
    }

    /**
     * Select note.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function select(Request $request)
    {
        $post = Post::find($request->id);
        session()->put('selected', $post);

        return redirect()->route('post.index');
    }

    /**
     * Toggle the publish flag.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleStatus(Request $request)
    {
        $post = Post::find($request)->first();

        $title = $post->title;
        $content = $post->content;
        $status = $post->status;

        switch ($post) {
            case $title && $content:
                $post->status = ($status) ? 0 : 1;
                $post->released_at = now();
                $post->save();

                return redirect()->route('post.index')->with('message', 'Release flags have been switched.');
                break;

            case (!$title || !$content) && $status === 1:
                $post->status = ($status) ? 0 : 1;
                $post->released_at = now();
                $post->save();

                return redirect()->route('post.index')->with('message', 'Release flags have been switched.');
                break;

            default:
                return redirect()->back()->with('message', 'Please save the title and text.');
        }
    }

    /**
     * Get login user name.
     * @return string
     */
    private function getLoginUserName()
    {
        $user = Auth::user();

        $name = '';
        if ($user) {
            if (7 < mb_strlen($user->name)) {
                $name = mb_substr($user->name, 0, 7) . "...";
            } else {
                $name = $user->name;
            }
        }

        return $name;
    }
}
