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
    
    if ($request->password == $request->repeatPassword && $request->password != '') {
      $user->password = Hash::make($request->password);
      
      $user->save();
  
      return redirect()->to('login');
    } else {
      return redirect()->to('sign-up')->withInput()->withErrors(__('content.password-error'));
    }
  }
}