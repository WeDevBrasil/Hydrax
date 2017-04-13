@extends('layouts.dashboard')

@section('content')
    <!-- Cadastro Cliente -->
    <div class="panel">
        <div class="panel-heading">
            <h3>Cadastro de Cliente</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('customer.store') }}" method="post">

                <div class="row">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Limite de Compra</label>
                        <input type="text" class="form-control" name="limit_buy">
                    </div>

                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success"> Registrar </button>
            </form>
        </div>
    </div>
    <!-- Fim Cadastro Cliente -->
@endsection