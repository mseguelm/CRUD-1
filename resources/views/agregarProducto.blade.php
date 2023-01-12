@extends('layouts.app')

@section('content')
<body>

    <div class="container">
        @if (session()->has('cliente'))
        <h3>
            Cliente: {{ session('cliente') }}
        </h3>
        <h4>
            Total: ${{number_format($total,0,"",".")}}
        </h4>
        @if(session()->has('serviceValue'))
        <h4>
            Valor aproximado de envio: ${{number_format(session('serviceValue'),0,"",".")}}
        </h4>
        @endif
        <div class="buscador">
            <form action="/agregarProducto" class="d-flex" role="search" method="GET">
                <input name="producto_nombre" class="form-control search-box" type="search" placeholder="" aria-label="Search" value="">
                <button class="btn btn-success" style="background-color: #82D9D0; border: red;" type="submit">Buscar</button>
            </form>
        </div>
            <a href="{{url('/cancelarPedido')}}" style="width: 150px" class="btn btn-danger">Cancelar pedido</a>
            <a href="{{url('/terminarPedido')}}" style="width: 150px" class="btn btn-success">Terminar pedido</a>
<table class="table table-hover">
<thead>
    <th>Producto</th>
    <th>Descripcion</th>
    <th>Valor</th>
    <th>stock</th>
    <th>Cantidad</th>
    <th>subtotal</th>
    <th>Acciones</th>
</thead>
<tbody>
    @foreach($productos as $producto )
    <form action="/insertarProducto" >
        {{ csrf_field() }}
    <tr>
        <td>
            <span name="nombre" id="nombre" class="form-control"  >{{$producto->producto_nombre}} </span> 
        </td>
        <td>
            <span name="descripcion" id="descripcion" class="form-control"  >{{$producto->producto_descripcion}} </span> 
        </td>
        <td>
            <span name="valor" id="valor-{{$producto->producto_id}}" class="form-control" >${{number_format($producto->producto_valor,0,"",".")}}</span>
        </td>
        <td>
            <span name="stock" id="stock-{{$producto->producto_id}}" class="form-control" >{{$producto->producto_stock}}</span>
        </td>
        <td>
            <input type="number" min="1" max="{{$producto->producto_stock}}" name="dt_cantidad" id="cantidad-{{$producto->producto_id}}"  onchange="calcularSubtotal({{$producto->producto_id}})" class="form-control" required>
        </td>
        <td>
            <span name="subtotal" style="width: 130px; height:36px" id="subtotal-{{$producto->producto_id}}" class="form-control"></span>
        </td>
        <td>
            <input type="text" name="dt_valor" id="valori-{{$producto->producto_id}}" class="form-control" value="{{$producto->producto_valor}}">
            <input type="text" name="dt_subtotal" id="subtotali-{{$producto->producto_id}}" >
            <input type="text" name="producto_id" id="producto_id" value="{{$producto->producto_id}}">
            @if(!$producto->deleted_at)
            <button type="submit" class="btn btn-success">Agregar producto</button>  
            <a href="{{url('/pedidos/'.$producto->producto_id.'/eliminarProducto')}}" class="btn btn-danger">Eliminar producto</a>
             @else
             <a href="{{url('/pedidos/'.$producto->producto_id.'/eliminarProducto')}}" class="btn btn-danger">Eliminar producto</a>
             @endif
        </td>
    </tr>
</form>
@endforeach
</tbody>
</table>
        @else
            <h3>No se ha generado ningun pedido</h3>
            
        @endif
           

</div>
</body>
<script>
    function calcularSubtotal(producto_id) {
        var cantidad = document.getElementById('cantidad-' + producto_id).value;
        var valor = document.getElementById('valor-' + producto_id).innerHTML;
        valor = valor.replace("$","");
        valor = valor.replace(".","");
        var subtotal = cantidad * valor;
        document.getElementById('valori-' + producto_id).value = valor;
        document.getElementById('subtotali-' + producto_id).value = subtotal;
        document.getElementById('subtotal-' + producto_id).innerHTML = ("$"+subtotal.toLocaleString('es'));
    }
</script>
@endsection
<style>
    .buscador{
    max-width: 400px;
}
</style>