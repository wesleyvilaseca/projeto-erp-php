var tabela = null;

function aprovar_item_cotacao(obj, id_solicitacao) {
    tabela = obj.closest("table>tbody");
    var id_item_cotacao = $(obj).closest("tr").find("td").eq(0).text();
    //alert(id_item_cotacao + " - " + id_cotacao);
    $.ajax({
        url: base_url + "itemcotacao/aprovar/",
        type: "POST",
        data: ({
            id_item_cotacao: id_item_cotacao,
            id_cotacao: id_cotacao
        }),
        dataType: "json",
        success: function (data) {
            if (data == "fim") {
                alert("Processo de cotacão finalizado com sucesso! foi gerada a ordem de compra!");
                window.location.href = base_url + "ordemcompra";
            } else {
                lista_cotacao(data, tabela);
                $("#classe_ativo_" + id_solicitacao).addClass("compra_ativo");
                $("#forn_" + id_solicitacao).html($(obj).closest("tr").find("td").eq(1).text());
                $("#preco_" + id_solicitacao).html("R$ " + $(obj).closest("tr").find("td").eq(3).text());
                $("#btnAprova_" + id_solicitacao).remove();
            }
        }
    });
}

function lista_cotacao(data, tabela) {
    var html = "";
    for (var i in data) {
        if (data[i].id_status_item_cotacao == 2) {
            var url = "<a href='javascript:;' onclick='aprovar_item_cotacao(this,  " + data[i].id_solicitacao + ")' class='link-vermelho'>Aprovar</a>";
        } else {
            var url = "<span class='link-cinza'>Aprovar</span>";
        }
        html += "<tr class='status-bg'>" +
                "<td align='center'>" + data[i].id_item_cotacao + "</td>" +
                "<td align='center'>" + data[i].nome + "</td>" +
                "<td align='center'>" + data[i].qtd + "</td>" +
                "<td align='center'>" + data[i].valor_cotacao + "</td>" +
                "<td align='center'>" + data[i].status_item_cotacao + "</td>" +
                "<td align='center'>" + url + "</td>" +
                "</tr>";
    }
    $(tabela).html(html);
}