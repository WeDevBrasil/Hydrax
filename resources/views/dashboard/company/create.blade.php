@extends('layouts.dashboard')

@section('content')
    <!-- Lista empresas -->
    <div class="panel">
        <div class="panel-heading">
            <h3>Cadastro de Empresa</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('company.store') }}" method="post">

                <div class="row">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success"> Registrar </button>
            </form>
        </div>
    </div>
    <!-- Fim lista empresas -->
@endsection