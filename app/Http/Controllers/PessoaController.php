<?php

namespace App\Http\Controllers;

use App\Pessoa;
use http\Client;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private $perfils;

    public function __construct(){
      global $perfils;
      $perfils = array("cliente" => "Cliente",
                  "proprietario" => "Proprietário",
                  "corretor" => "Corretor",
                  "interessado" => "Interessado",
                  "outro" => "Outro");
    }

    public function index(){
        $pessoas = Pessoa::all();
        return view('cliente.index',compact('pessoas'));
    }

    public function criar(Request $req){
        dd($req->all());
    }

    public function adicionar(){
        global $perfils;
        $perfilsSelecionados = null;
        return view('cliente.adicionar',compact('perfils','perfilsSelecionados'));
    }

    private function ajustarPerfil(&$pessoa){
      global $perfils;

      foreach ($perfils as $key => $value){
        if(in_array($key,$pessoa['perfils']))
          $pessoa[$key] = 'S';
        else
          $pessoa[$key] = 'N';
      }
    }

    private function getPerfilsSelecionados(Pessoa $pessoa)
    {
      $perfilsSelec = [];
      if($pessoa->cliente==='S'):
        array_push($perfilsSelec,"cliente");
      endif;

      if($pessoa->proprietario==='S'):
        array_push($perfilsSelec,"proprietario");
      endif;

      if($pessoa->corretor==='S'):
        array_push($perfilsSelec,"corretor");
      endif;

      if($pessoa->interessado==='S'):
        array_push($perfilsSelec,"interessado");
      endif;

      if($pessoa->outro==='S'):
        array_push($perfilsSelec,"outro");
      endif;

      return $perfilsSelec;
    }

    public function salvar(Request $req){
        $pessoa = $req->all();
        $this->ajustarPerfil($pessoa);
        Pessoa::create($pessoa);
        return redirect()->route('cliente.listar');
    }

    public function cancelar(){
        return redirect()->back();
    }

    public function alterar(Request $req, int $id){
        $pessoa = $req->all();
        $this->ajustarPerfil($pessoa);
        Pessoa::find($id)->update($pessoa);
        return redirect()->route('cliente.listar');
    }

    public function editar(int $id){
        $pessoa = Pessoa::find($id);
        $perfilsSelecionados = $this->getPerfilsSelecionados($pessoa);
        global $perfils;
        return view('cliente.editar',compact('pessoa','perfils','perfilsSelecionados'));
    }

    public function excluir($id){
        Cliente::find($id)->delete();
        return redirect()->route('cliente.listar');
    }
}
