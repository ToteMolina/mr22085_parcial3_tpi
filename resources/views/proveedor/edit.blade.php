@extends('pages.inicio')

@section('title, 'Index - Editar proveedor')

@section('header')
<h1>Proveedor</h1>
@endsection

@section('content')

<form action="{{ route('proveedor.edit') }}" method="post">
    @csrf
    @method('PUT')
    <label for="nombreproveedor">Nombre proveedor</label>
    <input type="text" name="nombreproveedor">
    <label for="direccion">Dirección</label>
    <input type="text" name="nombreproveedor">
    <label for="codigo">Código</label>
    <input type="text" name="codigo">
    
    <button>Actualizar</button>
</form>

@endsection