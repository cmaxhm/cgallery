<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller {
  public function show() {
    return view('public.home', [
      'categoriesSidebar' => Category::take(50)->orderBy('name', 'asc')->get(),
      'usersRanking' => User::take(30)->orderBy('points', 'desc')->get(),
      'posts' => Post::orderBy('created_at', 'desc')->paginate(50)
    ]);
  }
}
