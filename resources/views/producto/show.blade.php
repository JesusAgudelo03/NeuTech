@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? __('Show') . " " . __('Producto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Stock:</strong>
                            {{ $producto->cantidad_stock }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Modelo:</strong>
                            {{ $producto->modelo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Especificaciones Tecnicas:</strong>
                            {{ $producto->especificaciones_tecnicas }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Marca Id:</strong>
                            {{ $producto->marca_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Categoria Id:</strong>
                            {{ $producto->categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
