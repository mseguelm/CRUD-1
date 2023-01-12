@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Descripcion
                    </th>
                    <th>
                        Categoria
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategorias as $sc)
                <tr> 
                    <td>
                        {{$sc->sc_nombre}}  
                    </td>
                    <td>
                        {{$sc->sc_descripcion}}  
                    </td>
                    <td>
                        {{$sc->categoria->categoria_nombre}}  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection