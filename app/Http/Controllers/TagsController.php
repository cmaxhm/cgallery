<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller {
  public function show() {
    return view('public.tags', [
      'tags' => Tag::orderBy('name')->get(),
      'sidebars' => sidebars()
    ]);
  }
}
