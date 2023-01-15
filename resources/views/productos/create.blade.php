@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ url('/productos') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="producto_nombre" class="control-label">Nombre</label>
                <input type="text" class="form-control" name="producto_nombre" id="producto_nombre" value="">
            </div>
            <div class="form-group">
                <label for="producto_descripcion" class="control-label">Descripción del producto</label>
                <input type="text" class="form-control" name="producto_descripcion" id="producto_descripcion"
                    value="">
            </div>
            <div class="form-group">
                <label for="producto_stock" class="control-label">Stock</label>
                <input type="number" class="form-control" name="producto_stock" id="producto_stock" value="">
            </div>
            <div class="form-group">
                <label for="producto_valor" class="control-label">Precio</label>
                <input type="number" class="form-control" name="producto_valor" id="producto_valor" value="">
            </div>
            <div class="form-group">
                <label for="producto_alto" class="control-label">Alto</label>
                <input type="number" class="form-control" name="producto_alto" id="producto_alto" value="">
            </div>
            <div class="form-group">
                <label for="producto_ancho" class="control-label">Ancho</label>
                <input type="number" class="form-control" name="producto_ancho" id="producto_ancho" value="">
            </div>
            <div class="form-group">
                <label for="producto_profundidad" class="control-label">profundidad</label>
                <input type="number" class="form-control" name="producto_profundidad" id="producto_profundidad"
                    value="">
            </div>
            <div class="form-group">
                <label for="producto_peso" class="control-label">peso</label>
                <input type="number" class="form-control" name="producto_peso" id="producto_peso" value="">
            </div>
            <div class="form-group">
                <label for="categoria_id" class="control-label">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                    <option value="">---Selecciona una Opcion---</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria['categoria_id'] }}">{{ $categoria['categoria_nombre'] }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Agregar producto">
            <a href="{{ url('productos') }}" class="btn btn-primary">Regresar</a>
        </form>
    </div>
@endsection
