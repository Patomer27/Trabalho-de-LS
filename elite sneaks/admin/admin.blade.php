@extends('LAYOUTS.mainAD')
@section('admin1','Home')
@section('admin')
<link rel="stylesheet" href="CSS/admin.css">

<main class="admin-dashboard">

    <section class="admin-card">
        <h2>📦 ver produtos</h2>
        <p>Adicione, edite ou remova produtos do catálogo.</p>
        <div class="btn-container">
            <a href="/gpr" class="admin-btn">Acessar</a>
        </div>
    </section>

    <section class="admin-card">
        <h2>🛒 Gerenciar Pedidos</h2>
        <p>Veja e atualize o status dos pedidos.</p>
        <div class="btn-container">
            <a href="/gp" class="admin-btn">Acessar</a>
        </div>
    </section>

    <section class="admin-card">
        <h2>📊 Estatísticas</h2>
        <p>Veja um resumo das vendas e estoque.</p>
        <div class="btn-container">
            <a href="/estatisticas" class="admin-btn">Acessar</a>
        </div>
    </section>

    <section class="admin-card">
        <h2>⚙️ Configurações</h2>
        <p>Personalize informações da loja.</p>
        <div class="btn-container">
            <a href="/config" class="admin-btn">Acessar</a>
        </div>
    </section>

    

</main>
@endsection
