<?php

namespace App\Http\Controllers;

use App\Pessoa;
use http\Client;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::all();
        return view('cliente.index',compact('pessoas'));
    }

    public function criar(Request $req){
        dd($req->all());
    }

    public function adicionar(){
        return view('cliente.adicionar');
    }

    public function salvar(Request $req){
        $pessoa = $req->all();
        Pessoa::create($pessoa);
        return redirect()->route('cliente.listar');
    }

    public function cancelar(){
        return redirect()->back();
    }

    public function alterar(Request $req, int $id){
        $pessoa = $req->all();
        Pessoa::find($id)->update($pessoa);
        return redirect()->route('cliente.listar');
    }

    public function editar(int $id){
        $pessoa = Pessoa::find($id);
        return view('cliente.editar',compact('pessoa'));
    }

    public function excluir($id){
        Cliente::find($id)->delete();
        return redirect()->route('cliente.listar');
    }
}
