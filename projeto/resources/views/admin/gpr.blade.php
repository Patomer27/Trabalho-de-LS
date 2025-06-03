@extends('LAYOUTS.mainAD')
@section('admin1','Home')
@section('admin')
<link rel="stylesheet" href="CSS/admin.css">
<main class="admin-dashboard">
        <section class="admin-card">
            <h2>👟 Masculino</h2>
            <p>Gerencie os produtos da categoria Masculino.</p>
            <a href="/masculino" class="admin-btn">Acessar</a>
        </section>

        <section class="admin-card">
            <h2>👠 Feminino</h2>
            <p>Gerencie os produtos da categoria Feminino.</p>
            <a href="/feminino" class="admin-btn">Acessar</a>
        </section>

        <section class="admin-card">
            <h2>🧒 Infantil</h2>
            <p>Gerencie os produtos da categoria Infantil.</p>
            <a href="/infantil" class="admin-btn">Acessar</a>
        </section>
    </main>
    @endsection