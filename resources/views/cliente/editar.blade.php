@extends('layout.site')

@section('titulo','Editar Cliente')

@section('conteudo')
    <div class="container">
      <div class="jumbotron mt-4">
        <h2 class="text-center">
          EDITAR PESSOA
        </h2>
      </div>
      <form action="{{ route('cliente.alterar',$pessoa->id) }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="put">
          @include('cliente._form')
        <button type="submit" class="btn btn-primary mt-2">Alterar</button>
      </form>
    </div>
@endsection
