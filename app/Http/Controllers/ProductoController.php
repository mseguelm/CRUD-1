<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(?Request $request)
    {
        if($request && $request->has('producto_nombre')) {
            $productos = Producto::withTrashed()->where('producto_nombre', 'LIKE', '%' . $request->producto_nombre . '%')->get();
            return view('productos.index',compact('productos'));
        }else{
            $productos = Producto::withTrashed()->with('Categoria')->get();
            return view('productos.index',compact('productos'));
            }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view ('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = $request->except('_token');
        Producto::insert($producto);
        return redirect('productos');
    }

    public function actualizarstock(Request $request){
        $producto = Producto::withTrashed()->where('producto_id','=',$request->producto_id)
        ->first();
        if($producto->producto_stock==0){
            $producto->restore();
        }
        $producto->increment('producto_stock', $request->cantidad);
        $producto->save();
        return redirect('productos');
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
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $producto = Producto::withTrashed()->findOrFail($id);
        $producto->restore();
        return redirect('productos');
    }
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('productos');
    }
}
