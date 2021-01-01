<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
  public function show() {
    return view('public.login', [
      'sidebars' => sidebars()
    ]);
  }
  
  public function authenticate(Request $request) {
    $credentials = $request->only('username', 'password');
    $remember = ($request->input('remember') == null) ? false : true;
  
    if (Auth::attempt($credentials, $remember)) {
      return redirect()->home();
    } else {
      return redirect()->to('login')->withInput()->withErrors(__('content.login-error'));
    }
  }
  
  
  public function logout() {
    Auth::logout();
  
    return redirect()->home();
  }
}
