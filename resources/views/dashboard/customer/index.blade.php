@extends('layouts.dashboard')

@section('content')

    @if(Session::has('flash_message'))
        <!-- Area de Alertasd -->
        <div class="alert-area">
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('flash_message') }}
            </div>
        </div>
        <!-- Fim da Area de Alertasd -->
    @endif

    <!-- Lista Clientes -->
    <div class="panel">
        <div class="panel-heading">
            <h3>Clientes</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Limite de Compra</th>
                    <th style="text-align: right">Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{ $customer->id }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>R$ {{ $customer->limit_buy }}</td>
                        <td style="text-align: right">
                            <a class="btn btn-success btn-xs" href="#" role="button"> Editar </a>
                            <a class="btn btn-danger btn-xs" href="#" role="button"> Deletar </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Fim lista Clientes -->
@endsection