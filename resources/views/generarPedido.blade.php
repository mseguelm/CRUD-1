@extends('layouts.app')

@section('content')
<body>
    <div class="container">

  
    @if (session()->has('cliente'))
        <h3>Hay un pedido sin terminar</h3>
        @else
        <form action="/insertarPedido" method="POST" onsubmit="return validarN()" >
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="pedidos_cliente" class="control-label">Nombre del cliente:</label>
                    <input style="width: 400px" type="text" id="pedidos_cliente" name="pedidos_cliente" class="form-control" value="Jose" required>
                </div>
                <div class="form-group">
                    <label for="pedidos_direccion" class="control-label">Direccion:</label>
                    <input style="width: 400px" type="text" id="pedidos_direccion" name="pedidos_direccion" class="form-control" value="Avenida" required>
                </div>
                <div class="form-group">
                    <label for="pedidos_numero" class="control-label">Numero:</label>
                    <input style="width: 400px" type="number" id="pedidos_numero" name="pedidos_numero" class="form-control" placeholder="Ingresar numero(12345678)" value="12345678" required>
                </div>
                <div class="form-group">
                    <label for="pedidos_correo" class="control-label">Correo</label>
                    <input style="width: 400px" type="email" id="pedidos_correo" name="pedidos_correo" class="form-control" value="jose@arce.cl" required>
                </div>
                <br>
                <div class="form-group">
                    <input  type="submit" class="btn btn-primary" value="Generar pedido">
                </div>  
        </form>
    @endif
    </div>
</body>
@endsection
<script>

function validarN() {
  var rut = document.getElementById("Numero").value;

  var regex = /^\d{8}$/;
  if (!regex.test(rut)) {
    alert("Debe ingresar un numero con el formato correcto");
    return false;
  }else{
    return true;
  }
}

</script>