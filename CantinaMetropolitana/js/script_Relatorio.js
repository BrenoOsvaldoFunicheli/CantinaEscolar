$(document).ready(function(){  
    $("#All").click(function(){
           
        $.ajax({
            type: "POST",
            url: "../Controller/SearchAllController.php",
            data: {option:1},
            cache: false,
            beforeSend:function (){
            },
            success: function(result){
                $(".table-pesquisa").html(result);
            }
        });
    return false;
    });
});

$(document).ready(function(){  
    $("#submit").click(function(){
           
        datai = $("#inicial").val();
        dataf = $("#final").val();
        $.ajax({
            type: "POST",
            url: "../Controller/SearchAllController.php",
            data: { option:2,
                    inicial:datai,
                    final:dataf },
            cache: false,
            beforeSend:function (){
            },
            success: function(result){
                $(".table-pesquisa").html(result);
            }
        });
    //}
    return false;
    });
});