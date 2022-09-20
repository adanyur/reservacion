<?php
namespace App\Controller;
require_once dirname(dirname(__FILE__)).'/config/database.php';

use App\models\Turno;
use App\utils\Utils;

class TurnoController {


    public function index(){
        return Turno::get();
    }

    public function store($request, $response){
        $turno = Turno::create(Utils::decode($request->body()));
        return $response->code(200)->json(['message' =>'Se creo el turno']);
    }

    public  function show($request, $response){
        return $response->code(200)->json(Turno::find($request->id));
    }

 
    public  function update($request, $response){
       Turno::find($request->id)->update(Utils::decode($request->body()));
        return $response->code(200)->json(['message'=>'Se actualizo el turno']);
    }

    public  function destroy($request, $response){
        Turno::find($request->id)->delete();
        return $response->code(200)->json(['message'=>'Se elimino el turno']);

    }




}