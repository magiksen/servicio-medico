@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Citas</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Servicio Médico</a></li>
                                <li class="breadcrumb-item active">Citas</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Registrar Cita</h4>

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form class="form-horizontal mt-3" action="{{ route('citas.store') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="fecha_hora" class="col-sm-2 col-form-label">Fecha - Hora</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="datetime-local" value="" id="fecha_hora" name="fecha_hora" value="{{ old('fecha_hora') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Paciente</label>
                                    <div class="col-sm-2">
                                        <select class="form-select select2" aria-label="Seleccionar Paciente" id="paciente_id" name="paciente_id">
                                            <option value="">Selecciona un paciente</option>
                                            @foreach($pacientes as $paciente)
                                                <option value="{{$paciente->id}}">{{$paciente->nombre.' '.$paciente->apellido}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Doctor</label>
                                    <div class="col-sm-2">
                                        <select class="form-select select2" aria-label="Seleccionar Doctor" id="doctor_id" name="doctor_id">
                                            <option value="">Selecciona un doctor</option>
                                            @foreach($doctores as $doctor)
                                                <option value="{{$doctor->id}}">{{$doctor->nombre.' '.$doctor->apellido}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="antecedentes" class="col-sm-2 col-form-label">Antecedentes</label>
                                    <div class="col-sm-5">
                                    <textarea id="antecedentes" name="antecedentes" class="form-control" maxlength="225" rows="3" placeholder="Antecedentes" value="{{ old('antecedentes') }}"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="motivo_consulta" class="col-sm-2 col-form-label">Motivo de la consulta</label>
                                    <div class="col-sm-5">
                                        <textarea id="motivo_consulta" name="motivo_consulta" class="form-control" maxlength="225" rows="3" placeholder="Motivo de la consulta" value="{{ old('motivo_consulta') }}"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="enfermedad_actual" class="col-sm-2 col-form-label">Enfermedad Actual</label>
                                    <div class="col-sm-5">
                                        <textarea id="enfermedad_actual" name="enfermedad_actual" class="form-control" maxlength="225" rows="3" placeholder="Enfermedad Actual" value="{{ old('enfermedad_actual') }}"></textarea>
                                    </div>
                                </div>
                                <p class="font-size-18">Examen Físico</p>
                                <div class="row mb-3">
                                    <label for="peso" class="col-sm-2 col-form-label">Peso</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" placeholder="Peso" id="peso" name="peso" value="{{ old('peso') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="altura" class="col-sm-2 col-form-label">Altura</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" placeholder="Altura" id="altura" name="altura" value="{{ old('altura') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tension" class="col-sm-2 col-form-label">Tensión</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" placeholder="Tensión" id="tension" name="tension" value="{{ old('tension') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="diagnostico" class="col-sm-2 col-form-label">Diagnóstico</label>
                                    <div class="col-sm-5">
                                        <textarea id="diagnostico" name="diagnostico" class="form-control" maxlength="225" rows="3" placeholder="Diagnóstico" value="{{ old('diagnostico') }}"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="examenes" class="col-sm-2 col-form-label">Exámenes</label>
                                    <div class="col-sm-5">
                                        <textarea id="examenes" name="examenes" class="form-control" maxlength="225" rows="3" placeholder="Exámenes" value="{{ old('examenes') }}"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3" style="justify-content: end;">
                                    <input style="width: 60px;" class="btn btn-primary waves-effect waves-light w-md" type="submit" value="Registrar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

@endsection
