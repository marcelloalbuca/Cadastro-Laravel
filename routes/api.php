<?php

use Illuminate\Http\Request;
use App\Model\Usuario;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('v1')->group(function(){
    
    /*Route::get('lista', function(){
       return Usuario::listar(10);
    });*/
    Route::get('listar', "API\Usuario@listar");

    Route::post('cadastra', "API\Usuario@salvar");

    Route::delete('usuario/{id}', "API\Usuario@deletar");

    Route::put('usuario/{id}', "API\Usuario@editar");
});

