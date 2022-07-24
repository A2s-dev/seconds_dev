<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DeactiveController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function showDeactiveForm()
  {
    if (strpos(auth()->user()->email , "@seconds.jp")) {
      return redirect()->route('home')->with('message','This function is not available for guest users.');
    }

    return view('auth/deactive');
  }

  public function deactive()
  {
    User::find(Auth::id())->delete();
    return redirect()->route('login');
  }
}
