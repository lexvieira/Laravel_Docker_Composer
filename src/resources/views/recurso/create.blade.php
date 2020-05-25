@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong class="text-uppercase">CADASTRAR RECURSO PARA A EMPRESA
                        {{ $empresa->nome_empresa }}</strong>
                </div>
                <div class="card-body">
                    <p>Cadastre aqui os recursos disponíveis</p>
                    <hr>
                    <form method="POST" action="/empresas/{{ $empresa->id }}/recursos">
                        @csrf
                        @include('recurso/form')
                        <hr>
                        <button class="btn btn-primary">Cadastrar Recurso</button>
                        <a href="/#" class="btn btn-success" data-toggle="modal" data-target="#modalInsumo">Adicionar Insumo (+)</a>
                    </form>
                    <hr>
                    Insumos Utilizados
                    <table class="table responsive">
                        <tr>
                            <th>
                                Material
                            </th>
                            <th>
                                Qtd/Volume
                            </th>
                            <th>
                                Massa/Volume
                            </th>
                            <th>
                                Tempo de Produção
                            </th>
                            <th>
                                Unidade de Tempo
                            </th>
                        </tr>
                        @forelse ($insumos as $insumo)
                        <tr>
                            <td>
                                {{ $insumo->nome_insumo ?? "1" }}
                            </td>
                            <td>
                                {{ $insumo->nome_insumo ?? "1"  }}
                            </td>
                            <td>
                                {{ $insumo->nome_insumo ?? "1" }}
                            </td>
                            <td>
                                {{ $insumo->nome_insumo ?? "1"  }}
                            </td>
                            <td>
                                {{ $insumo->nome_insumo ?? "1"  }}
                            </td>
                        </tr>
                        @empty
                        <td colspan="5">
                            Sem Recursos Registrados
                        </td>
                        @endforelse
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
