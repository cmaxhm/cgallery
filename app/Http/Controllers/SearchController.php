<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller {
  public function search(Request $request) {
    $posts = Post::where('title', 'like', '%'.$request->q.'%')->orderBy('created_at', 'desc')->paginate(50);
    $posts->appends(['q' => $request->q]);
    
    return view('public.search', [
      'searchQuery' => $request->q,
      'posts' => $posts,
      'sidebars' => sidebars()
    ]);
  }
}
