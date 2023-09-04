<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'nacionalidad',
        'cedula',
        'especialidad',
        'clinica',
        'email',
        'telefono',
    ];

    public function citas() {
        return $this->hasMany(Cita::class);
    }
}
