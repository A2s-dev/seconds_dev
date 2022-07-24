<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Validation at login
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $request->validate(
            [
                $this->username() => 'required|max:255|email',
                'password' => 'required|min:8|max:255|regex:/^[a-zA-Z0-9]+$/',
            ]
        );
    }

    /**
     * Guest Login.
     * 
     */
    public function guestLogin()
    {
        $email = 'Guest1@seconds.jp';
        $password = 'Guest123';

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('home');
        }

        return redirect('/');
    }

    /**
     * Post selection process after login.
     * 
     */
    protected function authenticated()
    {
        $post = Post::where('user_id', '=', Auth::id())->orderBy('updated_at', 'desc')->first();

        if ($post) {
            session()->put('select_post', $post);
        }
    }
}
