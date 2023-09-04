<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'nacionalidad',
        'cedula',
        'f_nacimiento',
        'edad',
        'email',
        'telefono',
    ];

    public function citas() {
        return $this->hasMany(Cita::class);
    }

}
