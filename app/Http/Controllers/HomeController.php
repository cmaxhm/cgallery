<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller {
  public function show() {
    return view('public.home', [
      'sidebars' => sidebars(),
      'posts' => Post::orderBy('created_at', 'desc')->paginate(50)
    ]);
  }
}
