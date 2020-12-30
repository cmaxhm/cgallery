<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller {
  public function show() {
    return view('public.categories', [
      'categories' => Category::orderBy('name')->get(),
      'sidebars' => sidebars()
    ]);
  }
}
