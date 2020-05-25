@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong class="text-uppercase">DETALHES EMPRESA - {{ $empresa->nome_empresa }}</strong></div>
                <div class="card-body">
                    <p>Você está em Cadastro de Empresas. Preencha as informações corretamente, pois serão o principal
                        meio de contato com os fornecedores e parceiros</p>
                    <hr>
                    <form>
                        @include('empresa/form')
                    </form>
                    <hr>
                    <form method="POST" action="/empresas/{{ $empresa->id }}">
                        <a class="btn btn-primary" href="/empresas/{{ $empresa->id }}/edit">Alterar Empresa</a>
                        <a class="btn btn-success" href="/empresas/{{ $empresa->id }}/recursos/create">Cadastrar Recursos</a>
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">
                            Remover Empresa
                        </button>
                        <a href="/empresas" class="btn btn-dark">Voltar</a>
                    </form>
                    <hr>
                    Recursos Disponíveis
                    <table class="table responsive">
                        <thead>
                            <tr>
                                <th class="col-sm-1">
                                    {{-- Add FontAwesome Symbols --}}
                                </th>
                                <th  class="col-sm-1">
                                    {{-- Add FontAwesome Symbols --}}
                                </th>
                                <th>
                                    Recurso
                                </th>
                                <th>
                                    Capacidade
                                </th>
                                <th>
                                    Produção
                                </th>
                                <th>
                                    Disponível?
                                </th>
                                <th>
                                    Ativo
                                </th>
                                <th>
                                    Utilizações / Doações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($empresa->Recurso_disp as $recurso)
                                <tr>
                                    <td class="" colspan=""><a class="btn btn-success btn-sm font-weight-bold" href="{{route('insumo.store', [$empresa->id, $recurso->id])}}" aria-label="Inclui insumos utilizados para a produção do {{ $recurso->nome_recurso }}"
                                        data-toggle="modal" data-target="#modalInsumo" onclick="changeInfoResourceInsumo(this)"
                                        >+ Insumo</a>
                                    </td>
                                    <td class="">
                                        <a class="btn btn-primary btn-sm font-weight-bold" href=""
                                            data-toggle="modal" data-target="#modalInsumo" onclick="showInsumo({{ $recurso->id }})"
                                            >Ver Insumos</a>
                                    </td>
                                    <td>
                                        {{ $recurso->nome_recurso ?? "1" }}
                                    </td>
                                    <td>
                                        {{ $recurso->capacidade_recurso ?? "1"  }}
                                    </td>
                                    <td>
                                        {{ $recurso->capacidade_producao ?? "1" }}
                                    </td>
                                    <td>
                                        <input type="checkbox" name="recurso_disponivel_{{ $recurso->id }}" id="recurso_disponivel_{{ $recurso->id }}" {{ $recurso->recurso_disponivel=="1" ? "checked" : ""  }} >
                                    </td>
                                    <td>
                                        <input type="checkbox" name="active_{{ $recurso->id }}" id="recurso_disponivel_{{ $recurso->id }}" {{ $recurso->active=="1" ? "checked" : ""  }} >
                                    </td>
                                    <td>
                                        0
                                    </td>
                                </tr>
                                @if (count($recurso->Insumo) > 0)
                                    <tr data-trid="{{ $recurso->id }}" class="d-none1">
                                        <th colspan="3">

                                        </th>
                                        <th>
                                            Material
                                        </th>
                                        <th>
                                            Qtd
                                        </th>
                                        <th>
                                            Medida
                                        </th>
                                        <th>
                                            Tempo
                                        </th>
                                        <th>
                                            Unidade
                                        </th>
                                    </tr>
                                @endif
                                @forelse ($recurso->Insumo as $insumo)
                                    <tr data-trid="{{ $recurso->id }}" class="d-none1">
                                        <td colspan="2">

                                        </td>
                                        <td class="col-sm-1"><a class="btn btn-success btn-sm font-weight-bold" href="{{route('insumo.store', [$empresa->id, $recurso->id])}}" aria-label="Inclui insumos utilizados para a produção do {{ $recurso->nome_recurso }}"
                                            data-toggle="modal" data-target="#modalInsumo" onclick="{{-- changeInfoResourceInsumo(this) --}}"
                                            >Detail</a>
                                        </td>
                                        <td>
                                            {{ $insumo->material_insumo }}
                                        </td>
                                        <td>
                                            {{ $insumo->quantidade }}
                                        </td>
                                        <td>
                                            {{ $insumo->unidade_medida }}
                                        </td>
                                        <td>
                                            {{ $insumo->tempo }}
                                        </td>
                                        <td>
                                            {{ $insumo->unidade_de_tempo }}
                                        </td>
                                    </tr>

                                @empty

                                @endforelse
                            @empty
                                <tr>
                                    <td colspan="5">
                                        Sem Recursos Registrados
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Insumo --}}
    @include('insumo/create')
</div>
@endsection
