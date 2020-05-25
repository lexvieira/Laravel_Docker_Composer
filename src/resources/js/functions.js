// interaction form functions
window.changeInfoResourceInsumo = function(obj = this.undefined){
    this.document.getElementById('resource-id-href').value = obj != this.undefined ? obj.href : this.document.getElementById('resource-id-href').value;
    this.document.getElementById("form-insumo").action = obj != this.undefined ? obj.href : this.document.getElementById('resource-id-href').value;
}

window.showmodal = function(modal){
    $('#' + modal).modal('show');
}

window.hidemodal = function(modal){
    $('#' + modal).modal('hide');
}

$( document ).ready(function() {
    if ($("#form-insumo-error").val() != undefined)
    {
        changeInfoResourceInsumo();
        showmodal("modalInsumo");
    }
});
