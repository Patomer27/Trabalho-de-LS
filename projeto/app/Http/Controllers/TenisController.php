<?php

namespace App\Http\Controllers;

use App\Models\Tenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenisController extends Controller
{
    public function store(Request $req)
    {
        $tenis = new Tenis;

        $imagem = Storage::put('/', $req->imagen);

        $tenis->nome = $req->nome;
        $tenis->genero = $req->genero;
        $tenis->preco = $req->preco;
        $tenis->imagem = $imagem;

        $tenis->save();

        return redirect('/gpr');
    }
}
