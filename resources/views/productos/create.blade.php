{{-- This is the code for including the layout --}}
@extends('layouts.app')

@section('title',"New Product")

@section('contenido')
    <h3>Register the product</h3>
    <form action="javascript:void(0)">
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
                {{-- Minuto 38:48 --}}
        </div>
    </form>
@endsection