<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Cita;
use App\Models\Paciente;
class PacienteController extends Controller
{
    public function show($id){
        $paciente = Paciente::find($id);
        $c = $paciente->cita;
        return $paciente;
    }
}
