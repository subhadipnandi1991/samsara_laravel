<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function login(Request $req)
  {
    $user = User::where(['email'=>$req->email])->first();
    // dd($req->password);
    // dd($user->password);
    if (!$user || !Hash::check($req->password, $user->password))
    {
      return "Your email or password is incorrect.";
    } else {
      $req->session()->put('user', $user);
      return redirect('/');
    }
  }

  // public function logout(Request $req)
  // {
  //   Auth::logout();
  //   $req->session()->invalidate();
  //   $req->session()->regenerateToken();
  //   return redirect('/login');
  // }
}
