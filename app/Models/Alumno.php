<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = "alumnos";
    
    protected $fillable = [
        'id',
        'nombre',
        'correo',
        'contraseña',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'edad'
    ];

    protected $hidden = [
        'id',
        'contraseña'
    ];

    public function obtenerAlumnos() {
        return Alumno::all();
    }

    public function obtenerAlumnoPorId($id) {
        return Alumno::find($id);
    }
}
