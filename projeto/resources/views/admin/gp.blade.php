@extends('LAYOUTS.mainAD')
@section('admin1','Home')
@section('admin')
<link rel="stylesheet" href="CSS/admin.css">
<main>
        <h2>Pedidos Realizados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID do Pedido</th>
                    <th>Cliente</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1001</td>
                    <td>João Silva</td>
                    <td>Tênis Masculino 1</td>
                    <td>1</td>
                    <td>R$ 199,99</td>
                    <td class="status">Pendente</td>
                </tr>
                <tr>
                    <td>#1002</td>
                    <td>Maria Souza</td>
                    <td>Tênis Feminino 1</td>
                    <td>2</td>
                    <td>R$ 399,98</td>
                    <td class="status">Enviado</td>
                </tr>
                <tr>
                    <td>#1003</td>
                    <td>Pedro Almeida</td>
                    <td>Tênis Infantil 2</td>
                    <td>1</td>
                    <td>R$ 149,99</td>
                    <td class="status">Entregue</td>
                </tr>
            </tbody>
        </table>
    </main>
    @endsection