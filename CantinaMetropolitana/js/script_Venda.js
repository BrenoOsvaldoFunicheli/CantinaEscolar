
//requisição de pesquisa
$(document).ready(function () {
    $("#submit").click(function () {
        enviar();
    });
});

//finalizer compra
$(document).ready(function () {
    $(".c").click(function () {

        //        alert('s')

        var option = $("#option").val();
        var qtds = [];
        var cods = [];
        var ra = $('#ra').val();
        var senha = $('#senha').val();
        var table = $('.table-compra');
        var valor;

        //        alert('d');

        table.find('tr').each(function (indice) {
            $(this).find('td').each(function (indice) {
                if (indice === 0) {
                    valor = $(this).text();
                    cods.push(valor);
                }
                if (indice === 4) {
                    valor = $(this).find('input').val();
                    qtds.push(valor);
                }
            });
        });
        
        $.ajax({
            type: "POST",
            url: "../Controller/InsertController.php",
            data: {
                tipo:'4',
                pendencia: option,
                produtos: cods,
                qtds: qtds,
                ra:ra,
                senha:senha
            },
            cache: false,
             beforeSend:function (){
//                 alert('s');
            },
            success: function (result) {
                if(result===""){
                    alert('Compra efetuada com sucesso');
                    $(".table-compra tbody").html('<td></td>');
                    $("#total").html('0');
                }
//                  alert(result);
            }
        });
        return false;
    });
});

//adicionar itens
$(document).on("click",".btn-add", function () {
   
    colunaAdd = $(this).parent().parent();
    colunaCompra = $(".table-compra tbody");
    tbCompra = $(".table-compra tbody").find("> *");
    length = tbCompra.size();

    btnID = this.id;

    for (i = 0; i < length; i++) {
        if (btnID === tbCompra[i].id) {
            alert('Este produto já foi adicionado');
            break;
        }

        if ((i === length - 1)) {
            identifier = "#" + btnID;

            $('<td></td>', {
                id: 'meuTD' + btnID
            }).appendTo(identifier);

            $('<input></input>', {
                type: 'number',
                id: 'ip' + btnID,
                class: 'form-control col-12 nu',
                min: '1'
            }).val(1).appendTo('#meuTD' + btnID);

            colunaCompra.append(colunaAdd);
            $('.table-compra tbody tr td button').removeClass('btn-success');
            $('.table-compra tbody tr td button').removeClass('btn-add');
            $('.table-compra tbody tr td button').addClass('btn-danger');
            $('.table-compra tbody tr td button').html('-');
            calcularTotal();
        }
    }
});

//percorrer tabela
$(document).on('change', 'input', function () {
    calcularTotal();
});

//remover itens
$(document).on("click", ".btn-danger", function () {
    colunaAdd = $(this).parent().parent().remove();
    calcularTotal();
});


//função para o calculo dinâmico dos valores
function calcularTotal() {
    var table = $('.table-compra');
    var total = 0;

    table.find('tr').each(function (indice) {
        $(this).find('td').each(function (indice) {
            if (indice === 2) {
                var valor = $(this).text();
                valor = valor.replace("R $", "");
                valor = valor.replace("R$", "");
                valor = valor.replace(",", ".");
                valor = parseFloat(valor);
                total += valor;
            }

            if (indice === 4) {
                total *= $(this).find('input').val();
            }
        });
        somatorio = total;
        $("#total").text("R$" + somatorio);
    });

}

function addTable() {

}

function enviar() {
    nome = $("#palavra").val();
    datai = $("#inicial").val();
    dataf = $("#final").val();

    $.ajax({
        type: "POST",
        url: "../Controller/VendaController.php",
        data: {
            option: 1,
            Nome: nome

        },
        cache: false,
        success: function (result) {
            $(".table-pesquisa").html(result);
        }
    });
    return false;
}