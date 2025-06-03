<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('CSS/styles.css')}}">

</head>
<body>
    <header>
        <h1>Loja de Tênis</h1>
        <nav>
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/masculino">Masculino</a></li>
                <li><a href="/feminino">Feminino</a></li>
                <li><a href="/infantil">Infantil</a></li>
                <li><a href="/cadastro">Cadastro</a></li>
                <li><a href="login/login">Login</a></li>
                
            </ul>
        </nav>
    </header>
    @yield('conteudo')
    