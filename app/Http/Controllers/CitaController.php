<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Cita;
class CitaController extends Controller
{
    
    public function index(){
        $cita = Cita::all();
        return $cita;
    }
    public function show($id){
        $cita = Cita::find($id);
        $cita_anidados_paciente = $cita->paciente;
        $cita_anidados_medico = $cita->medico;
        return $cita;
    }
}
