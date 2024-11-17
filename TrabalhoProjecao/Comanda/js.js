    $("#valor_total, #entrada").on('blur', function(){
    var valortotal = $('#valor_total').val(); 
    var entrada    = $('#entrada').val();

    var resultado   = parseInt(valortotal) + parseInt(entrada);
    $('#saldo_total').val(resultado);
});