@extends('layout.site')

@section('titulo','Clientes')

@section('conteudo')

    <div class="container">
      <div class="jumbotron mt-4">
        <h2 class="text-center">
          CADASTRO DE PESSOAS
        </h2>
      </div>
        <div class="row">
            <table class="table">
                <thred>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thred>
                <tbody>
                @foreach($pessoas as $pessoa)
                    <tr>
                        <td>{{$pessoa->id}}</td>
                        <td>{{$pessoa->nome}}</td>
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
