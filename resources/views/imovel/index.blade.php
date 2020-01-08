@extends('layout.site')

@section('titulo','Lista de Chamados')

@section('conteudo')

    <div class="container">
        <h3 class="center">
            Chamados
        </h3>
        <div class="row">
            <table>
                <thred>
                    <tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Cliente</th>
                        <th>Ação</th>
                    </tr>
                </thred>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('imovel.adicionar') }}">Novo</a>
        </div
    </div>

@endsection
