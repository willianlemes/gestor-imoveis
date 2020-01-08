<ul id="tabs-swipe-demo" class="tabs col s12">
    <li class="tab col s4"><a class="active" href="#tab-Identificacao">Identificação</a></li>
    <li class="tab col s4"><a href="#tab-localizacao">Localização</a></li>
    <li class="tab col s4"><a href="#tab-caracteristicas">Características</a></li>
</ul>

<div id="tab-Identificacao" class="m2 col s12">
  <div class="row">
    <div class="col s12">
        {{ Form::label('proprietario', 'Proprietário', []) }}
        {{ Form::select('proprietario', $proprietarios, null, ['class' => 'browser-default']) }}
    </div>
  </div>

  <div class="row">
    <div class="col s6">
        {{ Form::label('finalidade', 'Finalidade', []) }}
        {{ Form::select('finalidade', $finalidades, null, []) }}
    </div>
    <div class="col s6">
        {{ Form::label('tipo', 'Tipo', []) }}
        {{ Form::select('tipo', $tipos, null, []) }}
    </div>
  </div>

  <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Descrição</label>
      </div>
  </div>
</div>

<div id="tab-localizacao" class="col s12">
  @include('layout.endereco')
</div>

<div id="tab-caracteristicas" class="col s12">
  <div class="row">
    <div class="input-field col s3">
       <i class="material-icons prefix">airline_seat_individual_suite</i>
       <input type="number" class="validate">
       <label for="icon_prefix">N° de Dormitório(s)</label>
    </div>
    <div class="input-field col s3">
       <i class="material-icons prefix">wc</i>
       <input type="number" class="validate">
       <label for="icon_prefix">N° de Banheiro(s)</label>
    </div>
    <div class="input-field col s3">
       <i class="material-icons prefix">tv</i>
       <input type="number" class="validate">
       <label for="icon_prefix">N° de Sala(s)</label>
    </div>
    <div class="input-field col s3">
       <i class="material-icons prefix">directions_car</i>
       <input type="number" class="validate">
       <label for="icon_prefix">N° de carros na garagem</label>
    </div>

  </div>

  <div class="row">
    <div class="input-field col s3">
      <i class="material-icons prefix">local_shipping</i>
       <select>
         <option value="S">Sim</option>
         <option value="N" selected>Não</option>
       </select>
       <label>Está Mobiliado?</label>
     </div>
  </div>

</div>
