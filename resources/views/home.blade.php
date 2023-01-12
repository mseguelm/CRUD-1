@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/generar">Ingresar pedido</a>
                    <br>
                    <a href="/verpedidos">Ver pedidos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
