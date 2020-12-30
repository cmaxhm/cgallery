<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class TagController extends Controller {
  public function show(Request $request) {
    $tag = Tag::where('slug', $request->route()->slug)->firstOrFail();
    
    return view('public.tag', [
      'tag' => $tag,
      'posts' => $tag->posts()->orderBy('created_at', 'desc')->paginate(50),
      'sidebars' => sidebars()
    ]);
  }
}
