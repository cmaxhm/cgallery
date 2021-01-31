<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller {
  public function show() {
    return view('public.sign-up', [
      'sidebars' => sidebars()
    ]);
  }
  
  public function register(Request $request) {
    dd($request->all());
  }
}
