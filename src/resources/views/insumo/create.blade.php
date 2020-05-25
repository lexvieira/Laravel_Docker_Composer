<form method="POST" id="form-insumo" name="form-insumo" action="">
    @csrf
    <div class="modal fade" id="modalInsumo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Insumo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <p>
                        <div class="embed-responsive"> -->

                            <!-- <iframe class="embed-responsive-item" src="/insumos/create"
                                allowfullscreen></iframe> -->

                        <!-- </div>
                    </p> -->
                    @include('insumo/form')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar Insumo</button>
                </div>
            </div>
        </div>
    </div>
    {{-- {{ dd(response()) }} --}}
    {{-- @if ($errors->any())
    {{ count($errors) }}
    {{ $errors->hasBag('forminsumo') }}
    {{ dd($errors) }}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

</form>


