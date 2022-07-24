<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\Support\Facades\Crypt;
use App\Models\Post;

class DrawPdf
{
    public function __construct(Factory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $post_id = $request->post_id;
        $status = Crypt::decrypt($request->status);

        if ($post_id && $status === 1) {
            $transfer = Post::where('id', $post_id)->with('users')->first();

            $this->viewFactory->share('pdf', $transfer);
        } else {
            return abort(404);
        }

        return $next($request);
    }
}
