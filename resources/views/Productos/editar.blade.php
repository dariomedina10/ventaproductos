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
            <div class="h2 text-center">Editar Productos</div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            {{-- {!! Form::open(['route'=>['actualizar', $reg->cedula],'method'=>'put']) !!} --}}
            <form  method="post" action="{{ route('Actualizar_Producto', $reg->id) }}">
             {{--  @method('PUT')  --}}
                @csrf


                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group  ">
                            <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                            <input type="text" class="form-control" name="id" disabled value="{{ $reg->id }}" >
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group ">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            <input type="text" class="form-control" name="descripcion"  value="{{ $reg->descripcion }}" >
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            <input type="text" class="form-control" name="precio_neto" id= "precio_neto"  value="{{ $reg->precio_neto }}" onblur='calcular()'>
                        </div>
                    </div>

                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            <input type="text" class="form-control" name="porc_impuesto" id= "porc_imp"  value="{{ $reg->porc_impuesto *100 }}" onblur='calcular()'>

                        </div>
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            <input type="text" class="form-control" name="valor_impuesto" id= "valor_imp" value="{{ $reg-> valor_impuesto  }}" readonly>
                        </div>
                    </div>

                </div>

               <div class="form-group row mb-2">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                            <input type="text" class="form-control" name="precio_final" id="precio_final" value="{{ $reg-> precio_final  }}"  readonly>
                        </div>
                    </div>

                </div>
                <div class="form-group row mb-2">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block"> Actualizar  </button>
                    </div>
                    <div class="col">
                        <a href="{{ route('Index_Productos') }}" role="button" class="btn btn-secondary btn-block"> Cerrar  </a>
                    </div>
                </div>


            </form>
            {{-- {!! Form::close() !!} --}}
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

