<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller {
  public function show() {
    return view('public.home', [
      'sidebars' => sidebars(),
      'posts' => Post::orderBy('created_at', 'desc')->paginate(50)
    ]);
  }
}
