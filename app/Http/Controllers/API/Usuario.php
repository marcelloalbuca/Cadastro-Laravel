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
}
