<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ url(mix('site/css/materialize.css')) }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <header>
      @if(Auth::check())
      <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li>
               <a class="dropdown-trigger" href="#!" data-target="menu-cadastros">
                 Cadastros <i class="material-icons right">arrow_drop_down</i>
              </a>
            </li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Atividades</a></li>
          </ul>

            <ul>
              <li id="nav-mobile" class="right hide-on-med-and-down">
                 <a class="dropdown-trigger" href="#!" data-target="menu-usuario">
                     <i class="material-icons left">account_circle</i>
                     {{ Auth::user()->name }}
                     <i class="material-icons right">arrow_drop_down</i>
                </a>
              </li>
            </ul>
        </div>
      </nav>
      @endif

      <ul id='menu-cadastros' class='dropdown-content'>
        <li><a href="{{ route('cliente.listar') }}">Pessoas</a></li>
        <li><a href="{{ route('imovel.listar') }}">Propriedades</a></li>
      </ul>

      <ul id='menu-usuario' class='dropdown-content'>
        <li>
            <a href="#">
              Conta
              <i class="material-icons right">account_circle</i>
            </a></li>
        <li>
          <a href="{{ route('site.login.sair') }}">
            Sair
            <i class="material-icons right">exit_to_app</i>
          </a>
      </li>
      </ul>

    </header>

    @yield('conteudo')

    <script src="{{ url(mix('site/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('site/js/busca-cep.js')) }}"></script>
    <script src="{{ url(mix('site/js/materialize.js')) }}"></script>

    <script type="text/javascript">

      $(document).ready(function(){

        $('.tabs').tabs();

        $('.dropdown-trigger').dropdown({
          coverTrigger: false
        });

        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
          showClearBtn: true,
          yearRange: 100,
          maxDate: new Date(),
          i18n:{
                months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                weekdaysAbbrev: ['D','S','T','Q','Q','S','S'],
                today: 'Hoje',
                cancel: 'Cancelar',
                done: 'Confirmar',
                clear: 'Limpar',
                close: 'Fechar'
              }
        });

        $('select').formSelect();

        $('#cep').mask('00000-000');

      });

    </script>
</body>
</html>
