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
      'rg_ie',
      'data_nasc',
      'profissao',
      'telefone',
      'celular',
      'email',
      'cep',
      'uf',
      'ibge',
      'municipio',
      'logradouro',
      'nro_endereco',
      'bairro',
      'comp_endereco'
  ];

  protected $primaryKey = 'codigo';
}
