jQuery.fn.rotas = function(rotas) {

    var url = rotas.url;
    var urlSalvarOficio = rotas.urlSalvarOficio;

    $(document).on('click', '#salvar_oficio', function(){
 
        var dados = gerarOficio();
        //console.log(dados);
        
        jQuery.ajax({
            type: 'POST',
            url: urlSalvarOficio,
            data: dados,
            datatype: 'json'
        }).done(function(json){
            var resultado = json.resultado;
            if(resultado) {
                window.alert("Ofício salvo com sucesso!");
            } else {
                window.alert("Ofício não salvo, tente novamente!");
            }
            
        });
        
    });

    $(document).on('click', '#gerar_oficio', function() {
         //clear();
        //location.reload(true);
        window.open(url, '_blank');

        var dados = gerarOficio();
        console.log(dados);

        jQuery.ajax({
            type: 'POST',
            url: url,
            data: dados,
            datatype: 'json'
        })
    });

};

function gerarOficio() {
    /*
     * Variáveis
     */

    var cod_oficio = $('#codigo_oficio').val();
    var para_quem = $('#para_quem').val();
    var descricao = $('#descricao').val();
    var data = $('#data').val().replace('/', '-');
    data = data.replace('/', '-');

    /*
     * Fim variáveis
     */
    var dados = {cod_oficio: cod_oficio, para_quem: para_quem, data: data, descricao: descricao};

    console.log(dados);

    return dados;
}

function clear() {
    $("#nis, #nis_nome, #nis_dt_nasc, #nis_cpf, #nis_rg, #nis_end, #nis_num, #nis_comple,#nis_bairro, #nis_telefone, #nis_email, #id,#nis_nom_inst, #nis_curso, #nis_período, #nis_end_inst, #nis_bairro_inst, #nis_cidade_inst,#nis_matri, #nis_vem").val("");
    $('#nis_pass').val("0").attr('selected');
    $('#nis_período').val("0").attr('selected');
    $('#nis_outros').val("");
    $("#nis_confirmacao").attr("checked", false);
    $("#nis_novocadastro").attr("checked", false);
    $("#nis_naoencontrado").attr("checked", false);
    $('#btn_salvar').attr("disabled", true);
    $('#btn_salvar-2').attr("disabled", true);
    $('#btn_comprovante').attr("disabled", true);
}
;

$(document).ready(function() {

    var adicionar = $("#adicionar");
    var data_entrada = $('#data_retorno');
    var limite_linhas = 999;

    adicionar.on('click', function() {

        if (data_entrada.val() === "") {
            alert("É obrigatório inserir antes a data de recebimento do ofício");
        } else {
            //console.log("fofof");
            /* Conta quantidade de linhas na tabela */
            var linha_total = $('tbody#tbody tr').length;
            /* Condição que verifica se existe limite de linhas e, se existir, testa se usuário atingiu limite */
            if (limite_linhas && limite_linhas > linha_total)
            {
                /* Pega uma linha existente */
                var linha = $('tbody#tbody tr').html();
                /* Conta quantidade de linhas na tabela */
                var linha_total = $('tbody#tbody tr').length;
                /* Pega a ID da linha atual */
                var linha_id = $('tbody#tbody tr').attr('id');
                /* Acrescenta uma nova linha, incluindo a nova ID da linha */
                $('tbody#tbody').append('<tr id="linha_' + (linha_total + 1) + '">' + linha + '</tr>');
                //$(".inp_nis").mask("99999999999");// Adciona a máscara para os campos seguintes          
            }
            /* Se usuário atingiu limite de linhas… */
            else
            {
                alert("Desculpe, mas você só pode adicionar até " + limite_linhas + " linhas!");
            }
        }
    });

});
