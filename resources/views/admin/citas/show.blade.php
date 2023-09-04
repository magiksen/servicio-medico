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

                            <div class="row">
                                <div class="col-12">
                                    <div class="invoice-title">
                                        <h4 class="float-end font-size-16"><strong>{{ $cita->paciente->nombre.' '.$cita->paciente->apellido }}<br>{{ $cita->paciente->nacionalidad.$cita->paciente->cedula }}<br>{{ \Carbon\Carbon::parse($cita->fecha_hora)->format('d-m-Y h:i a') }}</strong></h4>
                                        <h3>
                                            <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo" height="48"/>
                                        </h3>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <address>
                                                <strong class="font-size-16">Atendido por:</strong><br>
                                                Médico: <br> <strong>{{ $cita->doctor->nombre.' '.$cita->doctor->apellido }}</strong><br>
                                                Especialidad: <br> <strong>{{ $cita->doctor->especialidad }}</strong>

                                            </address>
                                        </div>
                                        <div class="col-6 text-end">
                                            <address>
                                                <strong class="font-size-16">Datos del Paciente:</strong><br>
                                                Fecha de Nacimiento:<br> <strong>{{ $cita->paciente->f_nacimiento }}</strong><br>
                                                Edad:<br> <strong>{{ $cita->paciente->edad }}</strong><br>
                                                Correo:<br> <strong>{{ $cita->paciente->email }}</strong><br>
                                                Teléfono:<br> <strong>{{ $cita->paciente->telefono }}</strong><br>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <address>
                                                <strong>Examen Físico:</strong><br>
                                                Peso: <strong>{{ $cita->peso }}</strong><br>
                                                Altura: <strong>{{ $cita->altura }}</strong><br>
                                                Tesión: <strong>{{ $cita->tension }}</strong><br>
                                            </address>
                                        </div>
                                        {{--<div class="col-6 mt-4 text-end">
                                            <address>
                                                <strong>Order Date:</strong><br>
                                                January 16, 2019<br><br>
                                            </address>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <div class="p-2">
                                            <h3 class="font-size-16"><strong>Antecedentes</strong></h3>
                                        </div>
                                        <div class="p-2">
                                            <p>{{ $cita->antecedentes }}</p>
                                        </div>
                                        <div class="p-2">
                                            <h3 class="font-size-16"><strong>Motivo de la consulta</strong></h3>
                                        </div>
                                        <div class="p-2">
                                            <p>{{ $cita->motivo_consulta }}</p>
                                        </div>
                                        <div class="p-2">
                                            <h3 class="font-size-16"><strong>Enfermedad actual</strong></h3>
                                        </div>
                                        <div class="p-2">
                                            <p>{{ $cita->enfermedad_actual }}</p>
                                        </div>
                                        <div class="p-2">
                                            <h3 class="font-size-16"><strong>Diagnóstico</strong></h3>
                                        </div>
                                        <div class="p-2">
                                            <p>{{ $cita->diagnostico }}</p>
                                        </div>
                                        <div class="p-2">
                                            <h3 class="font-size-16"><strong>Exámenes a realizar</strong></h3>
                                        </div>
                                        <div class="p-2">
                                            <p>{{ $cita->examenes }}</p>
                                        </div>
                                        <div class="">
                                            <div class="d-print-none">
                                                <div class="float-end">
                                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- end row -->

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

@endsection
