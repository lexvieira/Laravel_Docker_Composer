@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong class="text-uppercase">ALTERAÇÃO DE DADOS DA EMPRESA - {{ $empresa->nome_empresa }}</strong></div>
                <div class="card-body">
                    <p>Você está em Cadastro de Empresas. Preencha as informações corretamente, pois serão o principal meio de contato com os fornecedores e parceiros</p>
                    <hr>
                    <form method="POST" action="/empresas/{{ $empresa->id }}">
                        @csrf
                        @method('PATCH')
                        @include('empresa/form')

                        <hr>
                        <button class="btn btn-primary">Alterar Empresa</button>
                        <a href="/empresas" class="btn btn-dark">Voltar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
