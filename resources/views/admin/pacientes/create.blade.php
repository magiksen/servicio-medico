@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Pacientes</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Servicio Médico</a></li>
                                <li class="breadcrumb-item active">Pacientes</li>
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

                            <h4 class="card-title">Agregar Paciente</h4>

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

                            <form class="form-horizontal mt-3" action="{{ route('pacientes.store') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" placeholder="Nombres" id="nombre" name="nombre" value="{{ old('nombre') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="apellido" class="col-sm-2 col-form-label">Apellidos</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" placeholder="Apellidos" id="apellido" name="apellido" value="{{ old('apellido') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Cédula</label>
                                    <div class="col-sm-2">
                                        <select class="form-select" aria-label="Seleccionar Nacionalidad" id="nacionalidad" name="nacionalidad">
                                            <option value="V">V</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" placeholder="Cédula" id="cedula" name="cedula" value="{{ old('cedula') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="f_nacimiento" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="date" id="f_nacimiento" name="f_nacimiento">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="number" id="edad" name="edad">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="email" placeholder="paciente@email.com" id="email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Teléfono</label>
                                    <div class="col-sm-2">
                                        <select class="form-select" aria-label="Seleccionar Linea Telefonica" id="linea_tel" name="linea_tel">
                                            <option value="0424">0424</option>
                                            <option value="0414">0414</option>
                                            <option value="0412">0412</option>
                                            <option value="0426">0426</option>
                                            <option value="0416">0416</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" placeholder="Teléfono" id="telefono" name="telefono" value="{{ old('telefono') }}">
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
