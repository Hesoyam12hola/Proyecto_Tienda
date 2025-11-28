@extends('layouts.app')

@section('template_title')
    {{ __('Tipo de Producto') }}
@endsection

@section('content')

<section class="table-custom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="float-right">
                            <a href="{{ route('panel') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Volver al inicio') }}
                            </a>
                        </div>
                        <span id="card_title">{{ __('Tipos de Producto') }}</span>
                        <a href="{{ route('tipoproducto.create') }}" class="btn btn-primary btn-sm">
                            {{ __('Crear Tipo de Producto') }}
                        </a>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoproductos as $tipoproducto)
                                    <tr>
                                        <td>{{ $tipoproducto->id }}</td>
                                        <td>{{ $tipoproducto->nombre }}</td>
                                        <td>{{ $tipoproducto->descripcion }}</td>
                                        <td>
                                            <form action="{{ route('tipoproducto.destroy', $tipoproducto->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('tipoproducto.show', $tipoproducto->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Reporte') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('tipoproducto.edit', $tipoproducto->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Seguro que desea eliminar?') ? this.closest('form').submit() : false;">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {!! $tipoproductos->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>

