<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class ImovelController extends Controller
{
  private $finalidades;
  private $tipos;

  public function __construct(){
    global $finalidades;
    global $tipos;

    $finalidades = array( "1" => "Venda",
                          "2" => "Troca por Caminhão",
                          "3" => "Trocar por Chácara"
                        );

    $tipos = array( "1" => "Casa",
                    "2" => "Casa + Comercial",
                    "3" => "Sobrado",
                    "4" => "Sobrado + Comercial",
                    "5" => "Comercial",
                    "6" => "Barracão",
                    "7" => "Terreno",
                    "8" => "Sítio",
                    "9" => "Fazenda",
                    "10" => "Chácara"
                        );

  }

  public function index(){
      $imoveis = null;
      return view('imovel.index',compact('imoveis'));
  }

  public function adicionar(){
    $proprietarios = Pessoa::pluck('nome_RazaoSocial','codigo');
    global $finalidades;
    global $tipos;
    return view('imovel.adicionar',compact('proprietarios', 'finalidades', 'tipos'));
  }



}
