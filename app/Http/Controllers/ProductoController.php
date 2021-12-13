<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::get();

        foreach ($productos as $loop => $item) {
            $porc[$loop] = ($item->porc_impuesto * 100) . '%';
        }


        return view('Productos.index', compact('productos','porc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Productos.Ingresar_Productos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nuevo = new Producto;
        $nuevo->descripcion = $request->descripcion;
        $nuevo->precio_neto  = $request->precio_neto;
        $porc = $request->porc_imp/100;
        $nuevo->porc_impuesto=$porc;
        $nuevo->valor_impuesto =$request->valor_imp;
        $nuevo->precio_final=$request->precio_final;

        $nuevo->save();
        return redirect()->route('Index_Productos')->with('mensaje','El producto ha sido creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $reg=Producto::findOrFail($id);

        return view ('Productos.editar', compact('reg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cambiar=Producto::findOrFail($id);
        $cambiar->descripcion = $request->descripcion;
        $cambiar->precio_neto=$request->precio_neto;
        $porc = $request->porc_impuesto/100;
        $cambiar->porc_impuesto =$porc;
        $cambiar->valor_impuesto=$request->valor_impuesto;
        $cambiar->precio_final=$request->precio_final;
        $cambiar->save();
        return redirect()->route('Index_Productos')->with('mensaje','El Producto ha sido actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg=Producto::findOrFail($id);

        $reg->delete();
              return redirect()->route('Index_Productos')->with('mensaje','El Producto ha sido eliminado con éxito.');

    }
}
