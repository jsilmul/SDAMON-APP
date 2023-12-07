@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? "{{ __('Datos') Curso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Datos') }} Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> {{ __('Volver Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $curso->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $curso->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
