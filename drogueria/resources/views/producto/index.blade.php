@extends('layouts.app')

@section('template_title')
    Productos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="float-right">
                                <a href="{{ route('panel') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Volver al inicio') }}
                                </a>
                            </div>

                            <span id="card_title">
                                {{ __('Productos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('producto.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear un Nuevo Producto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="table-custom">
                        <div class="table-responsive">

                            @php
                                $i = $i ?? 0;  
                            @endphp

                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Descripcion</th>
                                        <th>Tipoproducto Id</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ $producto->id }}</td>

                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->cantidad }}</td>
                                            <td>{{ $producto->precio }}</td>
                                            <td>{{ $producto->descripcion }}</td>
                                            <td>{{ $producto->tipoproducto_id }}</td>

                                            <td>
                                                <form action="{{ route('producto.destroy', $producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('producto.show', $producto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Reporte') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('producto.edit', $producto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                {!! $productos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
