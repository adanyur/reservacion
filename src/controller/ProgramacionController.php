<?php
namespace App\Controller;
require_once dirname(dirname(__FILE__)).'/config/database.php';
use App\models\Programacion;
use App\utils\Utils;

class ProgramacionController {


    public function index(){
        return Programacion::get();
    }

    public function store($request, $response){

        $turno = Programacion::create(Utils::decode($request->body()));
        return $response->code(200)->json(['message' =>'Se creo el turno']);

    }

    public  function show($request, $response){
        return $response->code(200)->json(Programacion::with('turno','colaborador')->find($request->id));
    }

 
    public  function update($request, $response){
        Programacion::find($request->id)->update(Utils::decode($request->body()));
        return $response->code(200)->json(['message'=>'Se actualizo el turno']);
    }

    public  function destroy($request, $response){
        Programacion::find($request->id)->delete();
        return $response->code(200)->json(['message'=>'Se elimino el turno']);

    }








}