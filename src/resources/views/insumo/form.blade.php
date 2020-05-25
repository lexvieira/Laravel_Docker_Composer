<div id="form-insumo-div">
        <div class="form-group row">
            <div class="col-md-4">
                <label for="material_insumo" class="">{{ __('Insumo Utilizado') }}</label>
                <select id="material_insumo" name="material_insumo" class="custom-select @error('material_insumo') is-invalid @enderror">
                    <option value="" {{ old('material_insumo') == "0" ? "selected" : "" }} class="" {{ old('material_insumo') != "" ? "disabled" : "" }}>Selecione Insumo</option>
                    @forelse($materials as $material)
                    <option value="{{ $material->id }}" {{ old('material_insumo') == $material->id ? "selected" : "" }} >{{ $material->material }}</option>
                    @empty
                    <option>No material Available</option>
                    @endforelse
                </select>

                @error('material_insumo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3">
                <label for="quantidade" class="">Qtd/Volume Utilizado</label>
                <input id="quantidade" name="quantidade" type="text"
                    class="form-control @error('quantidade') is-invalid @enderror"
                    value="{{ old('quantidade') ?? $insumo->quantidade ?? "" }}" autocomplete="off" autofocus>

                @error('quantidade')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="unidade_medida" class="">Unidade Utilizada</label>
                <select id="unidade_medida" name="unidade_medida" class="custom-select @error('unidade_medida') is-invalid @enderror"
                tooltip="Volume ou Massa Utililzada desse Insumo">
                    <option value="" {{ old('unidade_medida') == "0" ? "selected" : "" }} class="" {{ old('unidade_medida') != "" ? "disabled" : "" }}>Selecione Unidade</option>
                    <option value="1" {{ old('unidade_medida') == "1" ? "selected" : "" }} class="">Mililitros</option>
                    <option value="2" {{ old('unidade_medida') == "2" ? "selected" : "" }} class="">Litros</option>
                    <option value="3" {{ old('unidade_medida') == "3" ? "selected" : "" }} class="">Miligrama</option>
                    <option value="4" {{ old('unidade_medida') == "4" ? "selected" : "" }} class="">Gramas</option>
                    <option value="5" {{ old('unidade_medida') == "5" ? "selected" : "" }} class="">Kilos</option>
                    <option value="6" {{ old('unidade_medida') == "6" ? "selected" : "" }} class="">Toneladas</option>
                </select>
                @error('unidade_medida')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-md-3">
                <label for="tempo" class="">Tempo Produção</label>
                <input id="tempo" name="tempo" type="text" class="form-control @error('tempo') is-invalid @enderror"
                    value="{{ old('tempo') ?? $insumo->tempo ?? "" }}" autocomplete="off" autofocus>

                @error('tempo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="unidade_de_tempo" class="">Unidade de Tempo</label>
                <select id="unidade_de_tempo" name="unidade_de_tempo" class="custom-select @error('unidade_de_tempo') is-invalid @enderror"
                    tooltip="Tempo normal de produção utilizado para esse insumo">
                    <option value="" {{ old('unidade_de_tempo') == "0" ? "selected" : "" }} class="" {{ old('unidade_de_tempo') != "" ? "disabled" : "" }}>Selecione Unidade</option>
                    <option value="1" {{ old('unidade_de_tempo') == "1" ? "selected" : "" }} class="">Minutos</option>
                    <option value="2" {{ old('unidade_de_tempo') == "2" ? "selected" : "" }} class="">Horas</option>
                    <option value="3" {{ old('unidade_de_tempo') == "3" ? "selected" : "" }} class="">Dias</option>
                    <option value="4" {{ old('unidade_de_tempo') == "4" ? "selected" : "" }} class="">Semanas</option>
                    <option value="5" {{ old('unidade_de_tempo') == "5" ? "selected" : "" }} class="">Meses</option>
                </select>
                @error('unidade_de_tempo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <label for="observacao" class="">{{ __('Observação') }}</label>
                <textarea id="observacao" name="observacao" class="form-control @error('observacao') is-invalid @enderror"
                    autocomplete="off" autofocus
                    >{{ old('observacao') }}</textarea>
                @error('observacao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
</div>
<input type="hidden" name="empresa-id" id="empresa-id" value="{{ old('empresa-id') ?? $empresa->id }}">
<input type="hidden" name="resource-id-href" id="resource-id-href" value="{{ old('resource-id-href') }}">
@error('form-insumo-error')
    <input type="hidden" name="form-insumo-error" id="form-insumo-error" value="{{ $message }}">
@enderror
