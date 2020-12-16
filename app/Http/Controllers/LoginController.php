<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
  public function show() {
    return view('public.login', [
      'categoriesSidebar' => Category::take(50)->orderBy('name', 'asc')->get(),
      'usersRanking' => User::take(30)->orderBy('points', 'desc')->get()
    ]);
  }
  
  public function authenticate(Request $request) {
    $credentials = $request->only('username', 'password');
  
    if (Auth::attempt($credentials)) {
      return redirect()->to('login');
    } else {
      return redirect()->to('login');
    }
  }
  
  
  public function logout() {
    Auth::logout();
  
    return redirect()->to('home');
  }
}
