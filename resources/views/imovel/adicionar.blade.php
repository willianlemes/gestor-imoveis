@extends('layout.site')

@section('titulo','Adicionar Imóvel')

@section('conteudo')
  <div class="container">
    <h4>
      Novo Imóvel
    </h4>
    <form class="col s12" action="{{ route('imovel.salvar') }}" method="post">
        {{ csrf_field() }}
        @include('imovel._form')
        <button class="btn waves-effect waves-light" type="submit">Salvar
          <i class="material-icons right">send</i>
        </button>
    </form>
  </div>
@endsection
