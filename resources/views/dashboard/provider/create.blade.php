@extends('layouts.dashboard')

@section('content')

    @if ($errors->any())
        <!-- Area de Alertasd -->
        <div class="alert-area">
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <div class="error">
                {{ implode('', $errors->all(':message')) }}<br />
                </div>
            </div>
        </div>
        <!-- Fim da Area de Alertasd -->
    @endif

    <!-- Cadastro Fornecedor -->
    <div class="panel">
        <div class="panel-heading">
            <h3>Cadastro de Fornecedor</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('provider.store') }}" method="post">


                <div class="row">
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('cnpj', 'CNPJ') !!}
                        {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('company_id', 'Empresa') !!}
                        {!! Form::select('company_id', $companies ,$companies, ['class' => 'form-control']) !!}
                    </div>
                </div>
                {!! Form::token() !!}
                {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}

                </form>
        </div>
    </div>
    <!-- Fim Cadastro Fornecedor -->
@endsection