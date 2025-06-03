@extends('LAYOUTS.main')
@section('título','Home')
@section('conteudo')
<main>
        <div class="form-container">
            <h2>Acesse sua conta</h2>
            <form action="">
            @csrf
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="tipo">Entrar como:</label>
                <select id="tipo" name="tipo">
                    <option value="cliente">Cliente</option>
                    <option value="admin">Administrador</option>
                </select>

                <button type="submit">Entrar</button>
            </form>
            
            <p>Não tem uma conta? <a href="/cadastro">Cadastre-se</a></p>
            <a href="/"><button type="submit">pular login</button></a>
    
    </main>
    @endsection