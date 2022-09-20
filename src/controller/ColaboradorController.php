<?php
namespace App\Controller;
require_once dirname(dirname(__FILE__)).'/config/database.php';
use App\models\Colaborador;
use App\utils\Utils;

class ColaboradorController {


    public function index(){
        return Colaborador::get();
    }

    public function store($request, $response){

        $turno = Colaborador::create(Utils::decode($request->body()));
        return $response->code(200)->json(['message' =>'Se creo el turno']);

    }

    public  function show($request, $response){
        return $response->code(200)->json(Colaborador::find($request->id));
    }

 
    public  function update($request, $response){
        Colaborador::find($request->id)->update(Utils::decode($request->body()));
        return $response->code(200)->json(['message'=>'Se actualizo el turno']);
    }

    public  function destroy($request, $response){
        Colaborador::find($request->id)->delete();
        return $response->code(200)->json(['message'=>'Se elimino el turno']);

    }




}