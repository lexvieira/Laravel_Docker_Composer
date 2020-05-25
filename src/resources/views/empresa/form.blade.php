                        <div id="form-empresa-div">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="nome_empresa" class="">{{ __('Empresa') }}</label>
                                    <input id="nome_empresa" name="nome_empresa" type="text" class="form-control @error('nome_empresa') is-invalid @enderror" value="{{ old('nome_empresa') ?? $empresa->nome_empresa }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>
                                    @error('nome_empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="">{{ __('E-Mail Address Empresa') }}</label>
                                    <div class="input-group">
                                        <input id="email" name="email" type="text" placeholder="E-mail corporativo" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $empresa->email }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">@empresa.com</span>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <label for="responsavel" class="">{{ __('Nome Responsável Empresa') }}</label>
                                    <input id="responsavel" name="responsavel" type="text" class="form-control @error('responsavel') is-invalid @enderror" value="{{ old('responsavel') ?? $empresa->responsavel }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>

                                    @error('responsavel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="telefone" class="">{{ __('Telefone') }}</label>
                                    <input id="telefone" name="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" value="{{ old('telefone') ?? $empresa->telefone }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>

                                    @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="cep" class="">{{ __('CEP') }}</label>
                                    <input id="cep" name="cep" type="text" onblur="pesquisacepempresa(this.value)" class="form-control @error('cep') is-invalid @enderror" value="{{ old('cep') ?? $empresa->cep }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>
                                    @error('cep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span id="error_cep_notfound" style="display: none" class="alert alert-warning" role="alert">
                                        <strong>CEP não encontrado!, digite novamente ou insira manualmente.</strong>
                                    </span>
                                    <span id="error_cep_invalid" style="display: none" class="alert alert-danger" role="alert">
                                        <strong>CEP não encontrado!, digite novamente ou insira manualmente.</strong>
                                    </span>
                                </div>
                                <div class="col-md-8">
                                    <label for="endereco" class="">{{ __('Endereco') }}</label>
                                    <input id="endereco" name="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" value="{{ old('endereco') ?? $empresa->endereco }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>
                                    @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="numero" class="">{{ __('Numero') }}</label>
                                    <input id="numero" name="numero" type="text" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero') ?? $empresa->numero }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>
                                    @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="bairro" class="">{{ __('Bairro') }}</label>
                                    <input id="bairro" name="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" value="{{ old('bairro') ?? $empresa->bairro }}" autocomplete="off" autofocus {{ $readonly ?? "" }} readonly>
                                    @error('bairro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <label for="endereco_complemento" class="">{{ __('Endereco Complemento (sala, apto, complemento, etc)') }}</label>
                                    <input id="endereco_complemento" name="endereco_complemento" onblur="enderecocomplementolostfocus()" type="text" class="form-control @error('endereco_complemento') is-invalid @enderror" value="{{ old('endereco_complemento') ?? $empresa->endereco_complemento }}" autocomplete="off" autofocus {{ $readonly ?? "" }}>
                                    @error('endereco_complemento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="estado" class="">{{ __('Estado') }}</label>
                                    <input id="estado" name="estado" type="text" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado') ?? $empresa->estado }}" autocomplete="off" autofocus {{ $readonly ?? "" }} readonly="true">
                                    @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="cidade" class="">{{ __('Cidade') }}</label>
                                    <input id="cidade" name="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" value="{{ old('cidade') ?? $empresa->cidade }}" autocomplete="off" autofocus {{ $readonly ?? "" }} readonly="true">
                                    @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="observacao" class="">{{ __('Observacao') }}</label>
                                    <textarea id="observacao" name="observacao" class="form-control @error('observacao') is-invalid @enderror" value="{{ old('observacao') ?? $empresa->observacao }}" autocomplete="off" autofocus {{ $readonly ?? "" }}></textarea>
                                    @error('observacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
