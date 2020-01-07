@extends('layout.site')

@section('titulo','Adicionar Cliente')

@section('conteudo')
  <div class="container">
    <h4>
      Cadastrar Pessoa
    </h4>
    <form class="col s12" action="{{ route('cliente.salvar') }}" method="post">
        {{ csrf_field() }}
        @include('cliente._form')
        <button class="btn waves-effect waves-light" type="submit">Salvar
          <i class="material-icons right">send</i>
        </button>
    </form>
  </div>
@endsection
