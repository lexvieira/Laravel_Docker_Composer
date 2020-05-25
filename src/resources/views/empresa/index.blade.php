@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Empresas cadastradas no Projeto Coletivo - Covid 19</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>As empresas cadastradas aqui são o principal meio de contato com os fornecedores e parceiros.</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Empresa</th>
                                <th>Responsavel</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <!-- <th>CEP</th> -->
                                <!-- <th>Endereco</th> -->
                                <!-- <th>Nº / Complemento</th> -->
                                <th>Cidade</th>
                                <th>Estado</th>
                                <!-- <th>Observacao</th> -->
                                <th>Ativa</th>
                            </tr>
                            @forelse ($empresas as $empresa)
                                <tr>
                                    <td><a class="btn btn-primary btn-sm" href="/empresas/{{ $empresa->id }}">Detalhes</a></td>
                                    <td>{{ $empresa->nome_empresa }}</td>
                                    <td>{{ $empresa->responsavel }}</td>
                                    <td>{{ $empresa->email }}</td>
                                    <td>{{ $empresa->telefone }}</td>
                                    <!-- <td>{{ $empresa->cep }}</td> -->
                                    <!-- <td>{{ $empresa->endereco }}</td> -->
                                    <!-- <td>{{ $empresa->endereco_complemento }}</td> -->
                                    <td>{{ $empresa->cidade }}</td>
                                    <td>{{ $empresa->estado }}</td>
                                    <!-- <td>{{ $empresa->observacao }}</td> -->
                                    <td><input type="checkbox" checked='{{ $empresa->active == 1 ? "True" : "False "}}'></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" align="center">
                                        Sem empresas cadastradas
                                    </td>
                                </tr>
                            @endforelse
                        </table>

                    </div>
                    <hr>
                    <a class="btn btn-primary" href="empresas/create" alt="Cadastrar Nova Empresa">Cadastrar Nova Empresa</a>



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
