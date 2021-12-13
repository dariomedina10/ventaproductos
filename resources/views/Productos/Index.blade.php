@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row ">
        <span class="text-center text-primary display-3">
            {{ config('app.name', 'Prueba Laravel') }}
        </span>
    </div>
    @include('layouts.mensajes')
    <hr />

    <div class="row justify-content-center">
        <div class="col">
            <div class="h4 text-center">Listado de Productos</div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <span class="float-end mb-3 ">
                <a class="btn btn-outline-primary " href="{{ route('Ingresar_Productos')}}" role="button">Nuevo</a>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <table class="table  table-striped ">
                <thead>
                    <tr>
                    <th scope="col">Código del Producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio Neto</th>
                    <th scope="col">Porcentaje de Impuesto</th>
                    <th scope="col">Valor de Impuesto</th>
                    <th scope="col">Precio Final</th>
                    <th scope="col" colspan="2"></th>

                    </tr>
                </thead>
                <tbody>
                @forelse ($productos as $data)

                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->descripcion }}</td>
                        <td>{{ $data->precio_neto  }}</td>
                        <td>{{ $porc[$loop->iteration - 1]  }}</td>
                        <td>{{ $data->valor_impuesto }}</td>
                        <td>{{ $data->precio_final }}</td>
                        <td><a class="btn btn-primary btn-block" href="{{ route('Editar_producto', $data->id )}}" role="button">Editar</a></td>
                        <td> <a class="btn btn-danger btn-block" href="" data-bs-toggle="modal" data-bs-target="#eliminar-{{ $data->id }}" role="button">Eliminar</a>
                            @include('Productos.eliminar')
                        </td>

                    </tr>
                @empty
                <tr>
                    <td colspan="5">
                        <span class="justify-content-center text-danger h3">
                            No hay Registro
                        </span>
                    </td>
                </tr>
                @endforelse

                </tbody>
                </table>


        </div>
    </div>
</div>




@endsection
