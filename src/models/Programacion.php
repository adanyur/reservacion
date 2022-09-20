<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use App\models\Turno;
use App\models\Colaborador;

class Programacion extends Model{
    protected $table = "programacion";
    public $timestamps = false;
    
    protected $fillable = ['fecha', 'cupo', 'minuto','idcolaborador','idturno','observacion'];
    


    public function turno(){
        return $this->hasOne(Turno::class,'id','idturno');
    }

    public function colaborador(){
        return $this->hasOne(Colaborador::class,'id','idcolaborador');
    }


}