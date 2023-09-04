<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctores = Doctor::all();

        return view('admin.doctores.index', compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctores.create');
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
            'email' => 'required|max:150',
            'telefono' => 'required|max:20',
        ],[
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'cedula.required' => 'La cédula es obligatoria',
            'cedula.unique' => 'Numero de cédula ya registrado',
            'email.required' => 'El correo es obligatorio',
            'telefono.required' => 'El télefono es obligatorio',
        ]);

        $doctor = new Doctor;

        $doctor->nombre = $request->nombre;
        $doctor->apellido = $request->apellido;
        $doctor->nacionalidad = $request->nacionalidad;
        $doctor->cedula = $request->cedula;
        $doctor->especialidad = $request->especialidad;
        $doctor->clinica = $request->clinica;
        $doctor->email = $request->email;
        $doctor->telefono = $request->linea_tel.'-'.$request->telefono;

        $doctor->save();

        $notification = array(
            'message' => 'El doctor ha sido registrado correctamente',
            'alert-type' => 'success'
        );

        return Redirect()->route('doctores.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
