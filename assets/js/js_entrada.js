$(function () {

    /*atualiza qtd do produto no estoque*/
    $("#btnInserir").on("click", function () {
        //var id_pedido   = $('#id_pedido').html();
        var id_produto = $('#id_produto').val();
        var qtd = $('#qtd').val();
        var preco = $('#preco').val();


        $.ajax({
            url: base_url + "entradaavulsa/inserir",
            type: "POST",
            data: {
                id_produto: id_produto,
                qtd: qtd,
                preco: preco
            },
            dataType: "json",
            success: function (data) {
                lista_itens(data);
                console.log(data);
            }
        });
    });

    /*captura as palavras digitas*/
    $("#produto").on("keyup", function () {
        var q = $(this).val();

        $.ajax({
            url: base_url + "produto/pesquisa",
            type: "POST",
            data: {
                q: q
            },
            dataType: "json",
            success: function (data) {
                //console.log(data);
                if ($('.listaProdutos').length == 0) {
                    $("#produto").after('<div class="listaProdutos"><div>')
                }

                html = "";
                for (var i in data) {
                    html += '<div class="si"><a href"javascript:;" onclick="selecionaProduto(this)"' +
                            'data-id="' + data[i].id_produto +
                            '"data-preco="' + data[i].preco +
                            '"data-nome="' + data[i].produto + '">' +
                            data[i].produto + ' - R$ ' + data[i].preco + '</a></div>';
                }
                $('.listaProdutos').html(html);
                $('.listaProdutos').show();

                if (data == "") {
                    $('.listaProdutos').hide();
                }
            }


        });
    });
});

function selecionaProduto(obj) {
    /* pegando o atributo do obj */
    //console.log(obj);
    var id = $(obj).attr('data-id');
    var nome = $(obj).attr('data-nome');
    var preco = $(obj).attr('data-preco');

    //após o click o produto a lista some
    $('.listaProdutos').hide();

    //pegando as info dos atributos do produto
    $('#produto').val(nome);
    $('#preco').val(preco);
    $('#qtd').val(1);
    $('#qtd').focus();
    $('#id_produto').val(id);

    //console.log(id + ' - ' + nome + ' - ' + preco);
}

function lista_itens(data) {
    html = "<tr>";
    for (var i in data) {
        var subtotal = data[i].qtd_entrada * data[i].valor_entrada;
        var item = parseInt(i) + parseInt(1);
        html += "<td align='center'>" + item + "</td>" +
                "<td align='center'>" + data[i].data_entrada + "</td>" +
                "<td align='center'>" + data[i].produto + "</td>" +
                "<td align='center'>" + data[i].qtd_entrada + "</td>" +
                "<td align='center'>" + data[i].valor_entrada + "</td>" +
                "<td align='center'>" + subtotal + "</td>" +
                "</tr>";
    }

    $("#lista_itens").html(html);
    limparCampos();
}

function limparCampos() {
    $('#id_produto').val("");
    $('#produto').val("");
    $('#qtd').val("");
    $('#preco').val("");
}
