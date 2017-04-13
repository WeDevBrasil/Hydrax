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

    <!-- Lista empresas -->
    <div class="panel">
        <div class="panel-heading">
            <h3>Empresas</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <th scope="row">{{ $company->id }}</th>
                        <td>{{ $company->name }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Fim lista empresas -->
@endsection