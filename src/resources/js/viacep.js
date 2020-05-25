//Source: ViaCep -Consulte CEPs de todo o Brasil (https://viacep.com.br)
//Version: 1.0

window.limpa_formulario_cep_empresa = function() {
    //Limpa valores do formulário de cep.
    document.getElementById('endereco').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('estado').value = ("");
    //document.getElementById('ibge').value=("");
}

window.meu_callback = function(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('endereco').value = (conteudo.logradouro);
        //document.getElementById('endereco_complemento').value=("");
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('estado').value = (conteudo.uf);
        document.getElementById('bairro').readonly = true;
        document.getElementById('cidade').readonly = true;
        document.getElementById('estado').readonly = true;

        //Hide Error Message
        document.getElementById("error_cep_notfound").style.display = "none";
        document.getElementById("error_cep_invalid").style.display = "none";
        //Focus on Endereco Complemento to use finish to fill the form
        document.getElementById('numero').value=("");
        document.getElementById('numero').focus();


    } //end if.
    else {
        //CEP não Encontrado  //Show Error Message.
        limpa_formulario_cep_empresa();
        document.getElementById("error_cep_notfound").style.display = "block";
        document.getElementById("error_cep_invalid").style.display = "none";
        document.getElementById('bairro').readonly = false;
        document.getElementById('cidade').readonly = false;
        document.getElementById('estado').readonly = false;
    }
}

window.enderecocomplementolostfocus = function(){
    document.getElementById('observacao').focus();
}

window.pesquisacepempresa = function(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('endereco').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('estado').value = "...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulario_cep_empresa();
            document.getElementById("error_cep_invalid").style.display = "block";
            document.getElementById('cep').value = "";
            document.getElementById('cep').focus();
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulario_cep_empresa();
    }
};
