<ul id="tabs-swipe-demo" class="tabs col s12">
    <li class="tab col s4"><a class="active" href="#tab-Identificacao">Identificação</a></li>
    <li class="tab col s4"><a href="#tab-endereco">Endereço</a></li>
    <li class="tab col s4"><a href="#tab-outras_informacoes">Outras Informações</a></li>
</ul>

<div id="tab-Identificacao" class="m2 col s12">

  <div class="row">

    <div class="col s6">
      {{ Form::label('perfils', 'Perfil', []) }}
      {{ Form::select('perfils[]', $perfils, $perfilsSelecionados, array('multiple' => true)) }}
   </div>
    <div class="input-field col s6">
       <select name="tipo">
         <option value="F" {{ isset($pessoa) ? $pessoa->tipo === 'F' ? 'selected' : '' : '' }} >Física</option>
         <option value="J" {{ isset($pessoa) ? $pessoa->tipo === 'J' ? 'selected' : '' : '' }} >Jurídica</option>
       </select>
       <label>Tipo</label>
     </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input id="nome_razaoSocial" name="nome_razaoSocial" type="text" class="validate"
        value="{{ isset($pessoa) ? $pessoa->nome_razaoSocial : '' }}">
      <label for="nome_razaoSocial">Nome</label>
    </div>
    <div class="input-field col s6">
      <input id="apelido_nomeFantasia" name="apelido_nomeFantasia" type="text" class="validate"
      value="{{ isset($pessoa) ? $pessoa->apelido_nomeFantasia : '' }}">
      <label for="apelido_nomeFantasia">Apelido</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input id="cpf_cnpj" name="cpf_cnpj" type="text" class="validate"
      value="{{ isset($pessoa) ? $pessoa->cpf_cnpj : '' }}">
      <label for="cpf_cnpj">CPF</label>
    </div>
    <div class="input-field col s6">
      <input id="rg_ie" name="rg_ie" type="text" class="validate"
      value="{{ isset($pessoa) ? $pessoa->rg_ie : '' }}">
      <label for="rg_ie">RG</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s6">
      <input id="data_nasc" name="data_nasc" type="text" class="datepicker"
      value="{{ isset($pessoa) ? $pessoa->data_nasc : '' }}">
      <label for="data_nasc">Data de Nascimento</label>
    </div>
  </div>
</div>

<div id="tab-endereco" class="col s12">


</div>
<div id="tab-outras_informacoes" class="col s12">
  Test 3
</div>
