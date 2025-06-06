@extends('LAYOUTS.mainAD')
@section('admin1','Home')
@section('admin')
<link rel="stylesheet" href="CSS/admin.css">
<main class="admin-dashboard">
        <section class="admin-card">
            <h2>📦 Produtos Vendidos</h2>
            <p><strong>350</strong> produtos vendidos</p>
        </section>

        <section class="admin-card">
            <h2>🛒 Pedidos Realizados</h2>
            <p><strong>280</strong> pedidos concluídos</p>
            <p><strong>70</strong> pedidos pendentes</p>
        </section>

        <section class="admin-card">
            <h2>💰 Receita Total</h2>
            <p><strong>R$ 25.000,00</strong> faturados</p>
        </section>

        <section class="admin-card">
            <h2>👤 Usuários Cadastrados</h2>
            <p><strong>1.200</strong> usuários cadastrados</p>
        </section>
    </main>

    @endsection