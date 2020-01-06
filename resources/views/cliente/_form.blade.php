<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Perfil</label>
      <select class="form-control" id="exampleFormControlSelect1" name="perfil">
        <option value="cliente" {{ isset($pessoa) ? $pessoa->perfil === 'cliente' ? 'selected' : '' : '' }}>Cliente</option>
        <option value="corretor" {{ isset($pessoa) ? $pessoa->perfil === 'corretor' ? 'selected' : '' : '' }}>Corretor</option>
        <option value="interessado" {{ isset($pessoa) ? $pessoa->perfil === 'interessado' ? 'selected' : '' : '' }}>Interessado</option>
        <option value="outro" {{ isset($pessoa) ? $pessoa->perfil === 'outro' ? 'selected' : '' : '' }}>Outro</option>
      </select>
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo</label>
      <select class="form-control" id="exampleFormControlSelect1" name="tipo">
        <option value="F" {{ isset($pessoa) ? $pessoa->tipo === 'F' ? 'selected' : '' : '' }} >Física</option>
        <option value="J" {{ isset($pessoa) ? $pessoa->tipo === 'J' ? 'selected' : '' : '' }}>Jurídica</option>
      </select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
      <label for="formGroupExampleInput">Nome</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="nome" value="{{ isset($pessoa->nome) ? $pessoa->nome : '' }}">
  </div>
  <div class="col">
    <label for="formGroupExampleInput2">Apelido</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="apelido" value="{{ isset($pessoa->apelido) ? $pessoa->apelido : '' }}">
  </div>
</div>
