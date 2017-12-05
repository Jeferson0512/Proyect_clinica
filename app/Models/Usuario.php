<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'Usuarios';
    protected $hidden = ['password'];
    public $timestamps = false;

    public function paciente(){
      return $this->belongsTo('App\Models\Paciente');
    }

    public function medico(){
      return $this->belongsTo('App\Models\Medico');
    }
}
