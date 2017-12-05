<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'Pacientes';

    public $timestamps = false;

    public function usuario(){
      return $this->belongsTo('App\Models\Usuario');
    }
    public function paciente(){
      return $this->hasMany('App\Models\Cita');
    }

    public function medico(){
      return $this->hasMany('App\Models\Medico');
    }
    
    public function cita(){
      return $this->hasMany('App\Models\Cita');
    }
}
