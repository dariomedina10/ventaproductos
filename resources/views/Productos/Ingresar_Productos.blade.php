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
            <form action="{{ route('Guardar_Producto') }}" method="post">
            @csrf
              <!-- Aqui va en el action la ruta de guardar correspondiente
                                                 al metodo store -->
                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group  ">
                            <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                            <input type="text" class="form-control" name="descripcion"  placeholder="Descripción" >
                        </div> <!-- form-group// -->
                    </div>

                    <div class="col">
                        <div class="input-group ">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            <input type="text" class="form-control" name="precio_neto" id = "precio_neto" placeholder="Precio Neto" >
                        </div> <!-- form-group// -->
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            <input type="text" class="form-control" name="porc_imp"  id="porc_imp"  placeholder="Porcentaje del Impuesto" onblur='calcular()'>
                        </div> <!-- form-group// -->
                    </div>

                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            <input type="text" class="form-control" name="valor_imp" id="valor_imp" placeholder="Valor del Impuesto" readonly>
                        </div> <!-- form-group// -->
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            <input type="text" class="form-control" name="precio_final" id="precio_final" placeholder="Precio Final" readonly>
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

@section('js')
<script>

function calcular()
{

  x = parseFloat(document.getElementById("precio_neto").value);
  y = parseFloat(document.getElementById("porc_imp").value);
  z = x*(y/100);
  w = x+z;
  // realizamos la suma de los valores y los ponemos en la casilla del
  // formulario que contiene el total

  document.getElementById("valor_imp").value= z;

  document.getElementById("precio_final").value= w;



}

</script>
@endsection
