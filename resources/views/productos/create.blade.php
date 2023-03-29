{{-- This is the code for including the layout --}}
@extends('layouts.app')

@section('title',"New Product")

@section('contenido')
    <h3>Register the product</h3>
    {{-- with the action we write --}}
    <form action="{{ route('productos.store') }}" method="POST">
        {{-- Al the forms of laravel, is necesary write this, 'cause whit this we avoid problems like hacking and more things, if dont write that, no will work the form --}}
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">Nombre del Producto</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control"
                placeholder="...">
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" 
                    {{-- The name is the name of the database that was indicated is sell out the product --}}
                    name="vendido" id="InputVendido" class="form-check-input">
                    <label for="InputVendido" class="form-check-label">Vendido</label>
                </div>
            </div>
                <div class="col-sm-4">
                    <label for="SelectStock" class="form-label">En stock</label>
                
                <select name="Stock" id="SelectStock" class="form-select">
                    <option value="0">No hay</option>
                    <option value="1">Bodega</option>
                    <option value="2">Tienda</option>
                </select>
                </div>
                <div class="col-sm-4">
                    <label for="InputFechaLimite" class="form-label">Fecha Caducos</label>
                    <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control">
                </div>
                <div class="col-sm-12">
                    <label for="TextAreaDescripcion" class="form-label">Desccripcio</label>
                    <textarea name="descripcion" id="TextAreaDescirpcion" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="col-sm-12 text-end my-2">
                    <button type="submit" class="btn btn-primary">
                        Guardar
                    </button>
                </div>
        </div>
    </form>
    <h1>Create Post</h1>
    {{-- definition: if we have any error, so will show alert jus down--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection