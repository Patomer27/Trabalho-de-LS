@extends('LAYOUTS.mainAD')
@section('admin1','Home')
@section('admin')
<link rel="stylesheet" href="CSS/gc.css">
    <main class="admin-dashboard">
        <section class="admin-card">
            <h2>📁 Gerenciar Categorias</h2>

            <!-- Criar nova categoria -->
            <form class="form-categoria">
                <input type="text" placeholder="Nome da categoria" required>
                <button class="admin-btn" type="submit">Adicionar Categoria</button>
            </form>

            <!-- Lista de categorias existentes -->
            <div class="lista-categorias">
                <h3>Categorias Existentes:</h3>
                <ul>
                    <li>
                        <form class="inline-form">
                            <input type="text" value="Masculino">
                            <button class="admin-btn">Atualizar</button>
                        </form>
                        <form class="inline-form">
                            <button class="admin-btn delete">Deletar</button>
                        </form>
                    </li>
                    <li>
                        <form class="inline-form">
                            <input type="text" value="Feminino">
                            <button class="admin-btn">Atualizar</button>
                        </form>
                        <form class="inline-form">
                            <button class="admin-btn delete">Deletar</button>
                        </form>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    @endsection
