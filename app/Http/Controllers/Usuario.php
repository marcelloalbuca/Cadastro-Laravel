<?php

namespace App\Http\Controllers;

use App\Model\Usuario as UsuarioModel;
use Illuminate\Http\Request;
use Hash;

class Usuario extends Controller
{
    public function cadastrar(){
        //dd(Hash::make('123'), md5('123'), sha1('123'));
        return view('usuario.cadastro');
    }

    public function salvar(Request $request){
        $request->validate([
            "nome" => "required",
            "email" => "required|email|unique:usuario,email",
            "senha" => "required|min:5"
        ]);
        //dd($request->all());

        if(UsuarioModel::cadastrar($request)){
            return view('usuario.sucesso',[
                "fulano" => $request->input('nome')
            ]);
        }else{
            echo"Ops! Falhou ao cadastrar";
        }

    }
}
