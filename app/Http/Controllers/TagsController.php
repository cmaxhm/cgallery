<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller {
  public function show() {
    return view('public.tags', [
      'tags' => Tag::orderBy('name')->get(),
      'categoriesSidebar' => Category::take(50)->orderBy('name', 'asc')->get()
    ]);
  }
}
