@extends('pages.inicio')

@section('title, 'Index - Proveedor')

@section('header')
<h1>Proveedor</h1>
@endsection

@section('content')

<div class="col-md-12">
    <table>
        <thead>
            <th>ID Proveedor</th>
            <th>Nombre proveedor</th>
            <th>Dirección</th>
            <th>Código</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach($dataProveedor as $itemProveedor)
                <tr>
                    <td>{{ $itemProveedor->id }}</td>
                    <td>{{ $itemProveedor->nombreproveedor }}</td>
                    <td>{{ $itemProveedor->direccion }}</td>
                    <td>{{ $itemProveedor->codigo }}</td>
                    <td>
                        <a href="{{ route('proveedor.edit') }}">Editar</a>
                    </td>
                    <td>
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('proveedor.destroy') }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection