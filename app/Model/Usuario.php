<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Hash;

class Usuario extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function listar(int $limite){
        $sql = self::select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limit($limite);
    
        dd($sql->toSql());
    }

    public static function cadastrar(Request $request){
        $sql = self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => DB::raw('NOW()')
        ]);

        dd($sql->toSql(), $request->all());
    }
}
