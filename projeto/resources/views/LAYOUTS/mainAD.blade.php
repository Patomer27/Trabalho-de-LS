<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('admin1')</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <h1>Elite Sneakers</h1>
        <nav>
            <ul>
                <li><a href="/admin">admin</a></li>
                <li><a href="/masculino">Masculino</a></li>
                <li><a href="/feminino">Feminino</a></li>
                <li><a href="/infantil">Infantil</a></li>
                <li><a href="/cadastro">Cadastro</a></li>
                @guest('admin')
                <li><a href="login/login">Login</a></li>
                @endguest
                @auth('admin')
                <li><a href="/admin/logout">Sair</a></li>
                @endauth
                
            </ul>
        </nav>
    </header>
    @yield('admin')
    