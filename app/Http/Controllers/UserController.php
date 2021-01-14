<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function posts(Request $request) {
      $user = User::where('username', $request->username)->firstOrfail();
      
      return view('public.user-posts', [
        'user' => $user,
        'posts' => $user->posts()->orderBy('created_at', 'desc')->paginate(50),
        'sidebars' => sidebars()
      ]);
    }
}
