<div class="container">
    <div class="row">
        <div class="col-xs-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Identificação</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row" id="tab-identificacao">
                        <div class="col">
                            <div class="form-group">
                                <label for="perfil">Perfil</label>
                                <select class="form-control" id="perfil" name="perfil">
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
                                <select class="form-control" id="tipo" name="tipo">
                                    <option value="F" {{ isset($pessoa) ? $pessoa->tipo === 'F' ? 'selected' : '' : '' }} >Física</option>
                                    <option value="J" {{ isset($pessoa) ? $pessoa->tipo === 'J' ? 'selected' : '' : '' }}>Jurídica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    O mais novo teste
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
            </div>

        </div>
    </div>
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
