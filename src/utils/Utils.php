<?php
namespace App\utils;



class Utils {


    public static function decode($data){
        return json_decode($data,true);
    }






}


?>