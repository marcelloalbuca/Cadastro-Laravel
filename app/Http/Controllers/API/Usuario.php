<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function salvar(Request $request){
        dd($request->all());
    }
}
