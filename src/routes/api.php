<?php 
namespace App\routes;

use App\controller\TurnoController;
use App\controller\ProgramacionController;
use App\controller\ColaboradorController;
use App\controller\CitaController;

$Klein = new \Klein\Klein();


/**TURNO**/
$Klein->respond('GET', '/turno', [ new TurnoController(), 'index' ]);
$Klein->respond('GET', '/turno/[:id]', [ new TurnoController(), 'show' ]);
$Klein->respond('POST', '/turno', [ new TurnoController(), 'store' ]);
$Klein->respond('PUT', '/turno/[:id]', [ new TurnoController(), 'update' ]);
$Klein->respond('DELETE', '/turno/[:id]', [ new TurnoController(), 'destroy' ]);
/**PROGRAMACION**/
$Klein->respond('GET', '/programacion', [ new ProgramacionController(), 'index' ]);
$Klein->respond('GET', '/programacion/[:id]', [ new ProgramacionController(), 'show' ]);
$Klein->respond('POST', '/programacion', [ new ProgramacionController(), 'store' ]);
$Klein->respond('PUT', '/programacion/[:id]', [ new ProgramacionController(), 'update' ]);
$Klein->respond('DELETE', '/programacion/[:id]', [ new ProgramacionController(), 'destroy' ]);
/**COLABORADOR**/
$Klein->respond('GET', '/colaborador', [ new ColaboradorController(), 'index' ]);
$Klein->respond('GET', '/colaborador/[:id]', [ new ColaboradorController(), 'show' ]);
$Klein->respond('POST', '/colaborador', [ new ColaboradorController(), 'store' ]);
$Klein->respond('PUT', '/colaborador/[:id]', [ new ColaboradorController(), 'update' ]);
$Klein->respond('DELETE', '/colaborador/[:id]', [ new ColaboradorController(), 'destroy' ]);
/**CITA**/
$Klein->respond('GET', '/cita', [ new CitaController(), 'index' ]);
$Klein->respond('GET', '/cita/[:id]', [ new CitaController(), 'show' ]);
$Klein->respond('POST', '/cita', [ new CitaController(), 'store' ]);
$Klein->respond('PUT', '/cita/[:id]', [ new CitaController(), 'update' ]);
$Klein->respond('DELETE', '/cita/[:id]', [ new CitaController(), 'destroy' ]);
$Klein->dispatch();