@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Doctores</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Servicio Médico</a></li>
                                <li class="breadcrumb-item active">Doctores</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="mb-2" style="text-align: right;">
                            <a class="btn btn-primary waves-effect waves-light" href="{{ route('doctores.create') }}" role="button">Agregar Doctor</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Lista de Doctores</h4>

                            <table id="principalTable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cédula</th>
                                    <th>Especialidad</th>
                                    <th>Clínica</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th></th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($doctores as $key => $doctor)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{$doctor->nombre}}</td>
                                        <td>{{$doctor->apellido}}</td>
                                        <td>{{$doctor->nacionalidad.$doctor->cedula}}</td>
                                        <td>{{$doctor->especialidad}}</td>
                                        <td>{{$doctor->clinica}}</td>
                                        <td>{{$doctor->email}}</td>
                                        <td>{{$doctor->telefono}}</td>
                                        <td>
                                            <a href="#"><i class="ri-eye-fill font-size-24" style="color:mediumseagreen;"></i></a>
                                            <a href="#"><i class="ri-edit-2-fill font-size-24" style="color:darkorange;"></i></a>
                                            <a href="#"><i class="ri-delete-bin-fill font-size-24" style="color:darkred;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

@endsection
