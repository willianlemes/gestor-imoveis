@extends('layout.site')

@section('titulo','Adicionar Cliente')

@section('conteudo')

    <div class="container">
        <h2 class="center">
            Adicionar Cliente
        </h2>
          <form action="{{ route('cliente.salvar') }}" method="post">
              {{ csrf_field() }}
              @include('cliente._form')
              <button type="button" class="btn btn-primary mt-2">Salvar</button>
          </form>
    </div>
@endsection
