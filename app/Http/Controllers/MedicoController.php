<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Medico;

class MedicoController extends Controller
{
    public function index(){
        //$type = "M";
        //$medicos = Medico::where('type', $type)->orderBy("username")->get();
        $medicos = Medico::all();
        return $medicos;
    }
    
    public function show($id){
        $medico = Medico::find($id);
        $usuario = $medico->usuario;
        
        return response()->json(['datos'=>$medico],202);
    }
}
