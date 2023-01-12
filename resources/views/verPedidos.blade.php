@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <th>
                    Cliente
                </th>
                <th>
                    Direccion
                </th>
                <th>
                    Numero
                </th>
                <th>
                    Correo
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Fecha
                </th>
                <th>
                    Total
                </th>
                <th>
                    Acciones
                </th>
            </thead>
            <tbody>
                @foreach ($pedidos as $item)    
                <tr>
                    <td>
                        <span>{{$item->pedidos_cliente}}</span>
                    </td>
                    <td>
                        <span>{{$item->pedidos_direccion}}</span>
                    </td>
                    <td>
                        <span>+56 9 {{$item->pedidos_numero}}</span>
                    </td>
                    <td>
                        <span>{{$item->pedidos_correo}}</span>
                    </td>
                    <td>
                        <span>{{$item->pedidos_estado}}</span>
                    </td>
                    <td>
                        <span>{{date("d-m-Y", strtotime($item->pedidos_fecha))}}</span>
                    </td>
                    <td>
                        <span>${{number_format($item->pedidos_total,0,"",".")}}</span>
                    </td>
                    <td>
                        <a href="{{url('/pedidos/'.$item->pedidos_id.'/verPedido')}}" class="btn btn-info">Ver detalles</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</body>



@endsection