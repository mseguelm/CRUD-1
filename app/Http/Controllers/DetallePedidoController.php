<?php

namespace App\Http\Controllers;

use App\Models\detalle_pedido;
use App\Http\Requests\Storedetalle_pedidoRequest;
use App\Http\Requests\Updatedetalle_pedidoRequest;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedetalle_pedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetalle_pedidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalle_pedido  $detalle_pedido
     * @return \Illuminate\Http\Response
     */
    public function show(detalle_pedido $detalle_pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalle_pedido  $detalle_pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_pedido $detalle_pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetalle_pedidoRequest  $request
     * @param  \App\Models\detalle_pedido  $detalle_pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetalle_pedidoRequest $request, detalle_pedido $detalle_pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalle_pedido  $detalle_pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalle_pedido $detalle_pedido)
    {
        //
    }
}
