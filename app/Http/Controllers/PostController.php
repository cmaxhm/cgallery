<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
  public function show(Request $request) {
    $postSlug = $request->slug;
    $post = Post::with(['category', 'user', 'tags'])->where('slug', $postSlug)->firstOrFail();
    
    return view('public.post', [
      'post' =>  $post,
      'sidebars' => sidebars()
    ]);
  }
}
