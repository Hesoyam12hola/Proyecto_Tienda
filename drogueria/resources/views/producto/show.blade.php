@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? __('Reporte del') . " " . __('Producto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Reporte del') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('producto.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="table-custom">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $producto->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $producto->cantidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $producto->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $producto->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipoproducto Id:</strong>
                                    {{ $producto->tipoproducto_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

