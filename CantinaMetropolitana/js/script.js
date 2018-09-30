$(document).ready(function () {
    $(".x").click(function () {
        nome = $("#palavra").val();
        datai = $("#inicial").val();
        dataf = $("#final").val();

        $.ajax({
            type: "POST",
            url: "../Controller/SearchController.php",
            data: {
                option: 1,
                Nome: nome,
                inicial: datai,
                final: dataf
            },
            cache: false,
            success: function (result) {
                $(".table-pesquisa").html(result);
            }
        });
        return false;
    });
});

$(document).ready(function () {
    $("#submitRA").click(function () {

        ra = $("#palavra").val();
        datai = $("#inicial").val();
        dataf = $("#final").val();

        $.ajax({
            type: "POST",
            url: "../Controller/SearchController.php",
            data: {
                option: 2,
                ra: ra,
                inicial: datai,
                final: dataf
            },
            cache: false,
            beforeSend: function () {
            },
            success: function (result) {
                $(".table-pesquisa").html(result);
            }
        });
        //}
        return false;
    });
});