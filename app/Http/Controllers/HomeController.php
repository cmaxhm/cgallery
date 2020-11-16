<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller {
  public function show() {
    return view('public.home', [
      'categories' => Category::take(50)->orderBy('name', 'asc')->get(),
      'posts' => Post::orderBy('created_at', 'desc')->paginate(50)
    ]);
  }
}
