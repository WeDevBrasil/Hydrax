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

    <!-- Lista produtos -->
    <div class="panel">
        <div class="panel-heading">
            <h3>Produtos</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Tamanho</th>
                    <th>Preço</th>
                    <th>Qantidade</th>
                    <th>Fornecedores</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>@foreach($product->provider as $provider) {{ $provider->name }}, @endforeach</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $products->links() !!}
        </div>
    </div>
    <!-- Fim lista produtos -->
@endsection