<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller {
  public function show(Request $request) {
    $category = Category::where('slug', $request->route()->slug)->firstOrFail();
    
    return view('public.category', [
      'category' => $category,
      'posts' => Post::where('category', $category->id)->orderBy('created_at', 'desc')->paginate(50),
      'sidebars' => sidebars()
    ]);
  }
}
