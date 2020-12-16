<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Usuario as UsuarioModel;

class Usuario extends Controller
{
    public function salvar(Request $request){
        //dd($request->all());
        if(UsuarioModel::cadastrar($request)){
            return response("ok", 201);
        } else {
            return response("error", 409);
        }  
    }

    public function listar(){
        return UsuarioModel::listar(10);
    }

    public function deletar(Request $request){
        if(UsuarioModel::deletar($request)){
            return response("ok deletar 2", 200);
        } else {
            return response("error deletar 2", 409);
        }
    }

    public function editar(Request $request){
        if(UsuarioModel::editar($request)){
            return response("ok editar 2", 201);
        } else {
            return response("error editar 2", 409);
        }  
    }
}
