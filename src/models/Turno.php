<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;


class Turno extends Model{
    protected $table = "turno";


    protected $fillable = ['descripcion', 'horainicio', 'horafin','hora'];
    
    public $timestamps = false;
}
// public function detallesEncuesta(){
//     return $this->hasMany(EncuestasPregunta::class,'idencuesta','id');
// }



// public function encuestaDetalles($idEncuesta){
//     return Encuestas::whereId($idEncuesta)->with(['detallesEncuesta'])->first();
// }