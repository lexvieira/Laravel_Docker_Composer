<div id="form">
    <div class="form-group row">
        <div class="col-md-6">
            <label for="nome_recurso" class="">{{ __('Nome do Recurso') }}</label>
            <input id="nome_recurso" name="nome_recurso" type="text"
                class="form-control @error('nome_recurso') is-invalid @enderror"
                value="{{ old('nome_recurso') ?? $recurso_disp->nome_recurso }}" autocomplete="off" autofocus
                {{ $readonly ?? "" }}>
            @error('nome_recurso')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="capacidade_recurso" class="">{{ __('Capacidade Recurso') }}</label>
            <input id="capacidade_recurso" name="capacidade_recurso" type="text"
                class="form-control @error('capacidade_recurso') is-invalid @enderror"
                value="{{ old('capacidade_recurso') ?? $recurso_disp->capacidade_recurso }}" autocomplete="off"
                autofocus {{ $readonly ?? "" }}>
            @error('capacidade_recurso')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    </div>
    <div class="form-group row">
        <div class="col-md-8">
            <label for="capacidade_producao" class="">{{ __('Capacidade Produção') }}</label>
            <input id="capacidade_producao" name="capacidade_producao" type="text"
                class="form-control @error('capacidade_producao') is-invalid @enderror"
                value="{{ old('capacidade_producao') ?? $recurso_disp->capacidade_producao }}" autocomplete="off"
                autofocus {{ $readonly ?? "" }}>
            @error('capacidade_producao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <label for="observacao" class="">{{ __('Observacao') }}</label>
            <textarea id="observacao" name="observacao" class="form-control @error('observacao') is-invalid @enderror"
                value="{{ old('observacao') ?? $recurso_disp->observacao }}" autocomplete="off" autofocus
                {{ $readonly ?? "" }}></textarea>
            @error('observacao')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <div class="custom-control custom-checkbox">
                <input id="recurso_disponivel" name="recurso_disponivel" type="checkbox"
                    class="custom-control-input @error('recurso_disponivel') is-invalid @enderror"
                    value="1" {{ old('recurso_disponivel') == "checked" ? "checked" : $recurso_disp->recurso_disponivel == "checked" ? "checked" : "" }} autocomplete="off"
                    autofocus {{ $readonly ?? "" }}>
                <label class="custom-control-label"
                    for="recurso_disponivel">{{ __('Recurso Disponivel para Utilização') }}</label>
            </div>
            @error('recurso_disponivel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
