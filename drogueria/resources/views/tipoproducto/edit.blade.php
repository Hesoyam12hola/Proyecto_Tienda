@extends('layouts.app')

@section('template_title')
    {{ __('Editar Tipo de Producto') }}
@endsection

@section('content')
<section class="table-custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">{{ __('Editar Tipo de Producto') }}</span>
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('tipoproducto.update', $tipoproducto->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        @include('tipoproducto.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
