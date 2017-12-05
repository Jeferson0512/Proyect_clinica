<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'Medicos';

    public $timestamps = false;

    public function cita(){
      return $this->hasMany('App\Models\Cita');
    }

    public function usuario(){
      return $this->belongsTo('App\Models\Usuario');
    }

    public function paciente(){
      return $this->hasMany('App\Models\Paciente');
    }
}
