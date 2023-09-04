<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();

        return view('admin.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:150',
            'apellido' => 'required|max:150',
            'cedula' => 'required|unique:pacientes|max:255',
            'f_nacimiento' => 'required',
            'edad' => 'required',
            'email' => 'required|max:150',
            'telefono' => 'required|max:20',
        ],[
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'cedula.required' => 'La cédula es obligatoria',
            'cedula.unique' => 'Numero de cédula ya registrado',
            'f_nacimiento.required' => 'La fecha de nacimiento es obligatoria',
            'edad.required' => 'La edad es obligatoria',
            'email.required' => 'El correo es obligatorio',
            'telefono.required' => 'El télefono es obligatorio',
        ]);

        $paciente = new Paciente;

        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->nacionalidad = $request->nacionalidad;
        $paciente->cedula = $request->cedula;
        $paciente->f_nacimiento = $request->f_nacimiento;
        $paciente->edad = $request->edad;
        $paciente->email = $request->email;
        $paciente->telefono = $request->linea_tel.'-'.$request->telefono;

        $paciente->save();

        $notification = array(
            'message' => 'El paciente ha sido registrado correctamente',
            'alert-type' => 'success'
        );

        return Redirect()->route('pacientes.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
