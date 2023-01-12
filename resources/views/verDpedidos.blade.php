@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Direccion</th>
                    <th>Numero</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $pedidos->pedidos_cliente }}</td>
                        <td>{{ $pedidos->pedidos_direccion }}</td>
                        <td>+56 9 {{ $pedidos->pedidos_numero }}</td>
                        <td>{{ $pedidos->pedidos_correo }}</td>
                        <td>{{ $pedidos->pedidos_estado }}</td>
                        <td>{{ $pedidos->pedidos_fecha }}</td>
                        <td>{{ $pedidos->pedidos_total }}</td>
                    </tr>
            </tbody>
        </table>       
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Valor Unitario</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos->detalle_pedido as $detalle)
                <tr>
                    <td>{{$detalle->productos->producto_nombre}}</td>
                    <td>{{$detalle->dt_cantidad}}</td>
                    <td>{{$detalle->dt_valor}}</td>
                    <td>{{$detalle->dt_subtotal}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection