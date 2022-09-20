<?php 
namespace App\routes;

use App\controller\TurnoController;

$Klein = new \Klein\Klein();


/**TURNO**/
$Klein->respond('GET', '/turno', [ new TurnoController(), 'index' ]);
$Klein->respond('GET', '/turno/[:id]', [ new TurnoController(), 'show' ]);
$Klein->respond('POST', '/turno', [ new TurnoController(), 'store' ]);
$Klein->respond('PUT', '/turno/[:id]', [ new TurnoController(), 'update' ]);
$Klein->respond('DELETE', '/turno/[:id]', [ new TurnoController(), 'destroy' ]);
$Klein->dispatch();