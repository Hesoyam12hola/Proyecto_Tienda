@extends('layouts.app')

@section('template_title')
    {{ $tipoproducto->nombre ?? __('Mostrar Tipo de Producto') }}
@endsection

@section('content')
<section class="table-custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="card-title">{{ __('Reporte del Tipo de Producto') }}</span>
                    <a class="btn btn-primary btn-sm" href="{{ route('tipoproducto.index') }}"> {{ __('Volver') }}</a>
                </div>
                <div class="card-body bg-white">
                    <div class="form-group mb-2">
                        <strong>Nombre:</strong>
                        {{ $tipoproducto->nombre }}
                    </div>
                    <div class="form-group mb-2">
                        <strong>Descripción:</strong>
                        {{ $tipoproducto->descripcion }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
