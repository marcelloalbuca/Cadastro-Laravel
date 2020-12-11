<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function listar(int $limite){
        $sql = self::select([
            "id",
            "name",
            "email",
            "data_cadastro"
        ])
        ->limit($limite);
    
        dd($sql->toSql());
    }

}
