<?php

namespace App\Http\Controllers;

use App\Models\Tag;
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
