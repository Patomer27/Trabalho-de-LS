<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(Request $request) {
  $tipo = $request->tipo;

  if ($tipo == 'cliente') {
    Auth::guard('cliente')->attempt([
      'email' => $request->email, 
      'password' => $request->senha
    ]);
    return redirect('/');
  }
  if ($tipo == 'admin') 
  {
    Auth::guard('admin')->attempt([
      'email' => $request->email,
      'password' => $request->senha,
    ]);
    return redirect('/admin');
    
    

  }
}

public function logout()
{
  Auth::guard('cliente')->logout();
  return redirect('/'); 
}

public function admin_logout()
{
  Auth::guard('admin')->logout();
  return redirect('/login/login');
}

}
