<div>

    <div class="modal fade" id="eliminar-{{$data->id}}" tabindex="-1" aria-labelledby="eliminar-{{ $data->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">

          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title text-center text-primary" id="eliminar-{{ $data->id}}">Eliminar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form  method="post" action="{{ route('Eliminar_Producto', $data->id) }}">
            @csrf
            @method('delete')

            <div class="modal-body">
                <div class="container ">
                    <div class="row">
                        <div class="col">

                            <p class="h3">Código del Producto: {{ $data->id }}</p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col">
                            <p class="h3">Descripción:  {{ $data->descripcion}} </span></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="h3">Precio Neto: {{ $data->precio_neto }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="h3">Valor Porcentual del Impuesto: {{ $data->porc_impuesto }}</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <p class="h3">Monto del Impuesto: {{ $data->valor_impuesto }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p class="h3">Precio Final: {{ $data->precio_final }}</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger" >Eliminar</button>
              <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Cerrar</button>
            </div>

          </div>

          </form>
        </div>

      </div>

</div>
