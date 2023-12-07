@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center numero_1">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de Avisos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Te has logueado correctamente!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
