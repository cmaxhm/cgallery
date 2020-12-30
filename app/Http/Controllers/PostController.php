<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
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
