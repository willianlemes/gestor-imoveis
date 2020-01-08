@extends('layout.site')

@section('titulo','Editar Chamado')

@section('conteudo')

    <div class="container">
        <h2 class="center">
            Alterar Chamado
        </h2>
        <div class="row">
            <form action="{{ route('imovel.alterar') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('chamado._form')
                <button class="btn deep-orange">Alterar</button>
            </form>
        </div>
    </div>
@endsection
