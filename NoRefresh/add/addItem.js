$(function() {
    $("#btnAdd").click(function() {

        var idProd = $("#HTML_item").val();
        var qtde = $("#HTML_qtde").val();

        if (qtde != '' && qtde != 0) {
            var dados = {
                idItem: idProd,
                qtde: qtde
            }
            
            $.post('addProduto.php',dados,function(retorna){
                
                $(".resultado").html(retorna);
                
            });
        }

    });
});