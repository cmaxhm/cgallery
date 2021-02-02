<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller {
  public function show() {
    return view('public.sign-up', [
      'sidebars' => sidebars()
    ]);
  }
  
  public function register(Request $request) {
    $user = new User();
    $user->username = $request->username;
    $user->name = $request->name;
    $user->last_name = $request->lastName;
    $user->email = $request->email;
    $user->birth_date = $request->birthdate;
    $user->avatar = 'storage/avatar.jpg';
    $user->country = $request->country;
    $user->points = 0;
    $user->is_admin = 0;
    $user->is_banned = 0;
    
    if ($request->username == null ||
      $request->birthdate == null ||
      $request->email == null ||
      $request->country == null ||
      $request->password == null) {
      return redirect()->to('sign-up')->withInput()->withErrors(__('content.sign-up-error'));
    }
    
    if (User::where('username', $user->username)->exists()) {
      return redirect()->to('sign-up')->withInput()->withErrors(__('content.username-in-use-error'));
    }
    
    if (User::where('email', $user->email)->exists()) {
      return redirect()->to('sign-up')->withInput()->withErrors(__('content.sign-up-error'));
    }
    
    if ($request->password == $request->repeatPassword) {
      $user->password = Hash::make($request->password);
      
      $user->save();
  
      return redirect()->to('login');
    } else {
      return redirect()->to('sign-up')->withInput()->withErrors(__('content.password-error'));
    }
  }
}
