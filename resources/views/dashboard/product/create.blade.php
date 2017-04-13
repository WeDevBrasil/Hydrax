@extends('layouts.dashboard')

@section('content')
    <!-- Lista fornecedores -->
    <div class="panel">
        <div class="panel-heading">
            <h3>Cadastro de Produto</h3>
        </div>
        <div class="panel-body">
            <form action="{{ route('product.store') }}" method="post">

                <div class="row">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        {!! Form::label('provider[]', 'Fornecedores') !!}
                        {!! Form::select('provider[]', $providers ,null, ['class' => 'form-control', 'multiple']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="">Medida</label>
                        <input type="text" class="form-control" name="size">
                    </div>

                    <div class="form-group">
                        <label for="">Preço</label>
                        <input type="text" class="form-control" name="price">
                    </div>

                    <div class="form-group">
                        <label for="">Quantidade</label>
                        <input type="text" class="form-control" name="quantity">
                    </div>

                    <div class="form-group">
                        {!! Form::label('company_id', 'Empresa') !!}
                        {!! Form::select('company_id', $companies ,null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-success"> Registrar </button>
            </form>
        </div>
    </div>
    <!-- Fim lista fornecedores -->
@endsection