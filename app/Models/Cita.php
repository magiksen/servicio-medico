<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_hora',
        'paciente_id',
        'doctor_id',
        'antecedentes',
        'motivo_consulta',
        'enfermedad_actual',
        'peso',
        'altura',
        'tension',
        'diagnostico',
        'examenes',
        'estado',
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function paciente() {
        return $this->belongsTo(Paciente::class);
    }
}
