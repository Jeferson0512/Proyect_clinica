<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'Citas_medicas';

    public $timestamps = false;

    public function paciente(){
      return $this->belongsTo('App\Models\Paciente');
    }

    public function medico(){
      return $this->belongsTo('App\Models\Medico');
    }
    
}
