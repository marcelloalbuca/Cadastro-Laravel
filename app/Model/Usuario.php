<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        //dd($sql->toSql());

        return $sql->get();
    }

    public static function cadastrar(Request $request){
        //DB::enableQueryLog();

       return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => new Carbon()
        ]);

        //dd(DB::getQueryLog());
    }
}
