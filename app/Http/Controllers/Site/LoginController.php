<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        $mensagem = $request->session()->get('mensagem');
        return view('login.index', compact('mensagem'));
    }

    public function entrar(Request $request){
        $login = $request->all();
        if (Auth::attempt(['email'=>$login['email'],'password'=>$login['senha']])){
          return redirect()->route('cliente.listar');
        }else{
          $request->session()
          ->flash(
            'mensagem',
            "Login inválido!"
          );
          return redirect()->route('site.login');
        }
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('site.login');
    }
}
