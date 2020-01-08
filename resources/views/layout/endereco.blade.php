<div class="row">
    <div class="input-field col s2">
        <input id="cep" name="cep" type="text" value="{{ isset($endereco) ? $endereco->cep : '' }}"
               onblur="pesquisacep(this.value);">
        <label for="cep">CEP</label>
    </div>
    <div class="input-field col s6">
        <input id="cidade" name="municipio" type="text"
          value="{{ isset($endereco) ? $endereco->municipio : '' }}">
        <label for="cidade">Município</label>
    </div>
    <div class="input-field col s2">
        <input id="ibge" name="ibge" type="text"
         value="{{ isset($endereco) ? $endereco->ibge : '' }}">
        <label for="ibge">IBGE</label>
    </div>
    <div class="input-field col s2">
        <input id="uf" name="uf" type="text"
         value="{{ isset($endereco) ? $endereco->uf : '' }}">
        <label for="uf">UF</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        <input id="rua" name="logradouro" type="text"
        value="{{ isset($endereco) ? $endereco->logradouro : '' }}">
        <label for="rua">Logradouro</label>
    </div>
    <div class="input-field col s2">
        <input id="bairro" name="nro_endereco" type="text"
        value="{{ isset($endereco) ? $endereco->nro_endereco : '' }}">
        <label for="bairro">Número</label>
    </div>
    <div class="input-field col s4">
        <input id="bairro" name="bairro" type="text"
        value="{{ isset($endereco) ? $endereco->bairro : '' }}">
        <label for="bairro">Bairro</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <textarea name="comp_endereco" id="comp_endereco" class="materialize-textarea">{{ isset($endereco) ? $endereco->comp_endereco : '' }}</textarea>
        <label for="comp_endereco">Complemento</label>
    </div>
</div>
