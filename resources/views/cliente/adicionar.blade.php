@extends('layout.site')

@section('titulo','Adicionar Cliente')

@section('conteudo')
  <div class="container">
    <form class="col s12" action="{{ route('cliente.salvar') }}" method="post">
        {{ csrf_field() }}
        @include('cliente._form')
    </form>
  </div>
@endsection
