@extends('layout.site')

@section('titulo','Adicionar Cliente')

@section('conteudo')

<div class="container">
    <h2 class="center">
        Login
    </h2>

    @isset($mensagem)
      <div class="row">
          <div class="m12 s12 col">
              <div class="card-panel red darken-1 center white-text">
                <h5>{{ $mensagem }}</h5>
              </div>
          </div>
      </div>
    @endisset

    <div class="row">
        <form action="{{ route('site.login.entrar') }}" method="post">
            {{ csrf_field() }}
            <div class="input-field">
                <input type="text" name="email">
                <label>E-mail</label>
            </div>

            <div class="input-field">
                <input type="password" name="senha">
                <label>Senha</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit">Entrar
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
@endsection
