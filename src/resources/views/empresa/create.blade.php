@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong class="text-uppercase">CADASTRO DE EMPRESAS</strong></div>
                <div class="card-body">
                    <p>Você está em Cadastro de Empresas. Preencha as informações corretamente, pois serão o principal meio de contato com os fornecedores e parceiros</p>
                    <hr>
                    <form method="POST" action="/empresas">
                        @csrf
                        @include('empresa/form')

                        <hr>
                        <button class="btn btn-primary">Cadastrar Empresa</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
