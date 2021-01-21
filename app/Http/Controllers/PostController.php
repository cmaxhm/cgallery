<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
  public function show(Request $request) {
    $post = Post::where('slug', $request->slug)->firstOrFail();
    
    return view('public.post', [
      'post' =>  $post,
      'comments' => $post->comments()->orderBy('created_at', 'desc')->paginate(20),
      'sidebars' => sidebars()
    ]);
  }
}
