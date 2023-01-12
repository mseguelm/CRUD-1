@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <form action="{{url('/categorias')}}" method="post" >
            {{ csrf_field()}}
            <div class="form-group">
                <label for="categoria_nombre" class="control-label">Nombre</label>
                <input type="text" class="form-control" name="categoria_nombre" id="categoria_nombre" required value="">
            </div>
                <div class="form-group">
                <label for="categoria_descripcion" class="control-label">Descripción</label>
                <input type="text" class="form-control" name="categoria_descripcion" id="categoria_descripcion" required value="">
            </div>   
            <input type="submit" class="btn btn-success" value="Agregar Categoria">
            <a href="{{url('categorias')}}" class="btn btn-primary">Regresar</a>
        </form>
    </div>
</body>
@endsection