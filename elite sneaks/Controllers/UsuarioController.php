<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $user = new User;
        $user ->name=$request -> nome;
        $user ->email=$request -> email;
        $user ->password=$request -> senha;

        $user -> save();

     

        return redirect('/')->with('success', 'Usuário cadastrado com sucesso!');
    }
}