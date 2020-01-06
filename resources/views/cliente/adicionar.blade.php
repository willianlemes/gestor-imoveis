@extends('layout.site')

@section('titulo','Adicionar Cliente')

@section('conteudo')
    <div class="container">
      <div class="jumbotron mt-4">
        <h2 class="text-center">
          ADICIONAR PESSOA
        </h2>
      </div>
      <form action="{{ route('cliente.salvar') }}" method="post">
          {{ csrf_field() }}
          @include('cliente._form')
          <button type="submit" class="btn btn-primary mt-2">Salvar</button>
      </form>
    </div>
@endsection
