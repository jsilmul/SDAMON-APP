@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? "{{ __('Datos') Alumno" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Datos') }} Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> {{ __('Volver Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id del Curso:</strong>
                            {{ $alumno->curso_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alumno->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $alumno->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $alumno->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $alumno->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $alumno->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
