@extends('LAYOUTS.mainAD')
@section('admin1','Home')
@section('admin')
<link rel="stylesheet" href="CSS/admin.css">
<main class="admin-dashboard">

    <section class="admin-card">
        <h2>👟 Masculino</h2>
        <p>veja os produtos da categoria Masculino.</p>
        <a href="/masculino" class="admin-btn">Acessar</a>
    </section>

    <section class="admin-card">
        <h2>👠 Feminino</h2>
        <p>veja os produtos da categoria Feminino.</p>
        <a href="/feminino" class="admin-btn">Acessar</a>
    </section>

    <section class="admin-card">
        <h2>🧒 Infantil</h2>
        <p>veja os produtos da categoria Infantil.</p>
        <a href="/infantil" class="admin-btn">Acessar</a>
    </section>

    <!-- CARD MAIOR COM FORMULÁRIO DE CADASTRO -->
<section class="admin-card full-width-card">
    <h2>✨Cadastro de Produto✨</h2>
    <form action="/admin/cadastrar-produto" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="foto">Foto do Produto:</label>
            <input type="file" id="foto" name="imagen" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" id="preco" name="preco" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="genero" required>
                <option value="infantil" selected>Infantil</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
        </div>

        <button type="submit" class="admin-btn">Cadastrar Produto</button>
    </form>
</section>



</main>


    @endsection