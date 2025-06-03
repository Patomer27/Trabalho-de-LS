@extends('LAYOUTS.main')
@section('título','Home')
@section('conteudo')
<section class="form-container">
    <h2>Cadastrar</h2>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</section>
    @endsection