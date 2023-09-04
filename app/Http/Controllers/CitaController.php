<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Doctor;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::all();

        return view('admin.citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $doctores = Doctor::all();

        return view('admin.citas.create', compact('pacientes', 'doctores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_hora' => 'required',
            'paciente_id' => 'required',
            'doctor_id' => 'required',
            'antecedentes' => 'required',
            'motivo_consulta' => 'required',
            'peso' => 'required',
            'altura' => 'required',
            'tension' => 'required',
            'diagnostico' => 'required',
            'examenes' => 'required',
        ],[
            'fecha_hora.required' => 'La fecha y hora son obligatorias',
            'paciente_id.required' => 'El paciente es obligatorio',
            'doctor_id.required' => 'El doctor es obligatorio',
            'antecedentes.required' => 'Los antecedentes son obligatorios',
            'motivo_consulta.required' => 'El motivo de la consulta es obligatorio',
            'peso.required' => 'El peso es obligatorio',
            'altura.required' => 'La altura es obligatoria',
            'tension.required' => 'La tensión es obligatoria',
            'diagnostico.required' => 'El diagnóstico es obligatorio',
            'examenes.required' => 'Los exámenes son obligatorios',
        ]);

        $cita = new Cita;

        $cita ->fecha_hora = $request->fecha_hora;
        $cita ->paciente_id = $request->paciente_id;
        $cita ->doctor_id = $request->doctor_id;
        $cita ->antecedentes = $request->antecedentes;
        $cita ->motivo_consulta = $request->motivo_consulta;
        $cita ->enfermedad_actual = $request->enfermedad_actual;
        $cita ->peso = $request->peso;
        $cita ->altura = $request->altura;
        $cita ->tension = $request->tension;
        $cita ->diagnostico = $request->diagnostico;
        $cita ->examenes = $request->examenes;

        $cita->save();

        $notification = array(
            'message' => 'La cita ha sido registrada correctamente',
            'alert-type' => 'success'
        );

        return Redirect()->route('citas.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        $cita = Cita::find($cita)->first();

        return view('admin.citas.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
