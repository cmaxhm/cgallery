<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
  public function show(Request $request) {
    $postSlug = $request->slug;
    $post = Post::with(['category', 'user'])->where('slug', $postSlug)->firstOrFail();
    
    return view('public.post', [
      'categoriesSidebar' => Category::take(50)->orderBy('name', 'asc')->get(),
      'post' =>  $post,
      'category' => $post->category()->first(),
      'user' => $post->user()->first(),
    ]);
  }
}
