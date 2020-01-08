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
        $pessoas = Pessoa::paginate(4);
        return view('pessoa.index',compact('pessoas'));
    }

    public function criar(Request $req){
        dd($req->all());
    }

    public function adicionar(){
        global $perfils;
        $perfilsSelecionados = array("cliente");
        return view('pessoa.adicionar',compact('perfils','perfilsSelecionados'));
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

    private function converterDataToBD($data){
      return date('Y-m-d',strtotime(str_replace("/","-",$data)));
    }

    public function salvar(Request $req){
        $pessoa = $req->all();
        $pessoa['data_nasc'] = $this->converterDataToBD($pessoa['data_nasc']);
        $this->ajustarPerfil($pessoa);
        Pessoa::create($pessoa);
        return redirect()->route('cliente.listar');
    }

    public function cancelar(){
        return redirect()->back();
    }

    public function alterar(Request $req, int $id){
        $pessoa = $req->all();
        $pessoa['data_nasc'] = $this->converterDataToBD($pessoa['data_nasc']);
        $this->ajustarPerfil($pessoa);
        Pessoa::find($id)->update($pessoa);
        return redirect()->route('cliente.listar');
    }

    public function editar(int $id){
        $pessoa = Pessoa::find($id);
        $pessoa->data_nasc = date('d/m/Y',strtotime($pessoa->data_nasc));
        $perfilsSelecionados = $this->getPerfilsSelecionados($pessoa);
        global $perfils;
        return view('pessoa.editar',compact('pessoa','perfils','perfilsSelecionados'));
    }

    public function excluir($id){
        Cliente::find($id)->delete();
        return redirect()->route('cliente.listar');
    }
}
