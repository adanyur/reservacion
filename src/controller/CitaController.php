<?php
namespace App\Controller;
require_once dirname(dirname(__FILE__)).'/config/database.php';
use App\models\Cita;
use App\utils\Utils;

class CitaController {


    public function index(){
        return Cita::get();
    }

    public function store($request, $response){

        $turno = Cita::create(Utils::decode($request->body()));
        return $response->code(200)->json(['message' =>'Se creo el turno']);

    }

    public  function show($request, $response){
        return $response->code(200)->json(Cita::find($request->id));
    }

 
    public  function update($request, $response){
        Cita::find($request->id)->update(Utils::decode($request->body()));
        return $response->code(200)->json(['message'=>'Se actualizo el turno']);
    }

    public  function destroy($request, $response){
        Cita::find($request->id)->delete();
        return $response->code(200)->json(['message'=>'Se elimino el turno']);

    }




}