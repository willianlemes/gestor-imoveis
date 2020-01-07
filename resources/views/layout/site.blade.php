<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <header>
      @if(Auth::check())
      <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li>
               <a class="dropdown-button" href="#!" data-activates="menu-cadastros">
                 Cadastros <i class="material-icons right">arrow_drop_down</i>
              </a>
            </li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Atividades</a></li>
          </ul>

            <ul>
              <li id="nav-mobile" class="right hide-on-med-and-down">
                 <a class="dropdown-button" href="#!" data-activates="menu-usuario">
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
        <li><a href="{{ route('chamado.listar') }}">Propriedades</a></li>
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

    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('ul.tabs').tabs();
        $('.dropdown-button').dropdown({
          belowOrigin: true
        });
      });

    </script>
</body>
</html>
