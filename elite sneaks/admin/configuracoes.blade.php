@extends('LAYOUTS.mainAD')
@section('admin1','Home')
@section('admin')
<link rel="stylesheet" href="CSS/admin.css">
<main class="admin-dashboard">
        <section class="admin-card">
        <h2>📁 Gerenciar Categorias</h2>
        <p>Crie, edite ou exclua categorias de produtos.</p>
        <div class="btn-container">
            <a href="/gc" class="admin-btn">Acessar</a>
        </div>
        </section>

        <section class="admin-card">
            <h2>📧 E-mail de Contato</h2>
            <p>Modifique o e-mail da loja.</p>
            <div class="btn-container">
                <a href="#" class="admin-btn">Alterar</a>
            </div>
        </section>

        <section class="admin-card">
            <h2>📞 Telefone</h2>
            <p>Atualize o telefone da loja.</p>
            <div class="btn-container">
                <a href="#" class="admin-btn">Alterar</a>
            </div>
        </section>

        <section class="admin-card">
            <h2>🌐 Redes Sociais</h2>
            <p>Edite os links das redes sociais.</p>
            <div class="btn-container">
                <a href="#" class="admin-btn">Alterar</a>
            </div>
        </section>
    </main>

    @endsection