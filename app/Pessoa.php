<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
  protected $fillable = [
      'cliente',
      'proprietario',
      'corretor',
      'interessado',
      'outro',
      'tipo',
      'nome_razaoSocial',
      'apelido_nomeFantasia',
      'cpf_cnpj',
      'rg_ie'
  ];

  protected $primaryKey = 'codigo';
}
