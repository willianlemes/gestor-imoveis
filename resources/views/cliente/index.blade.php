@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')

    <div class="container">
        <h2 class="center">
          CADASTRO DE PESSOAS
        </h2>
        <div class="row">
            <table class="bordered">
                <thred>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Apelido</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thred>
                <tbody>
                @foreach($pessoas as $pessoa)
                    <tr>
                        <td>{{$pessoa->nome}}</td>
                        <td>{{$pessoa->apelido}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('cliente.editar',$pessoa->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn btn-primary mt-2" href="{{ route('cliente.adicionar') }}">Adicionar</a>
        </div>
    </div>
@endsection
