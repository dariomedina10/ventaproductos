@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row ">
        <span class="text-center text-primary display-3">
            {{ config('app.name', 'Prueba Laravel') }}
        </span>
    </div>
    <hr />

    <div class="row justify-content-center">
        <div class="col">
            <div class="h2 text-center">Nuevo Producto</div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('Guardar_Factura') }}" method="post">
            @csrf
              <!-- Aqui va en el action la ruta de guardar correspondiente
                                                 al metodo store -->
                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group  ">
                            <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                            <input type="text" class="form-control" name="usuario"  placeholder="Identificacion del Usuario" >
                        </div> <!-- form-group// -->
                    </div>

                    <div class="col">
                        <div class="input-group ">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            <input type="text" class="form-control" name="compra_id"  placeholder="Identificacion de la compra" >
                        </div> <!-- form-group// -->
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            <input type="text" class="form-control" name="Fecha de la Compra"  placeholder="Fecha de la compra"  value ={{ date('d-m-Y', strtotime('now')) }} readonly>
                        </div> <!-- form-group// -->
                    </div>

                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            <input type="text" class="form-control" name="total"  placeholder="Valor del Impuesto" readonly >
                        </div> <!-- form-group// -->
                    </div>
                </div>



                <div class="form-group row mb-2">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block"> Guardar  </button>
                    </div>
                    <div class="col">
                        <a href="{{ route('Index_Productos') }}" role="button" class="btn btn-secondary btn-block"> Cerrar  </a>
                    </div>
                </div> <!-- form-group// -->


            </form>
        </div>
    </div>
</div>


@endsection

