$(function() {
    //$("#HTML_pesquisa").keyup(function(){ //ao input da text do form
    $("#botao").click(function() { //ao clique do botao do form
        var pesquisa = $("#HTML_pais").val(); //recupera valor do campo HTML

        if (pesquisa != '') {
            var dados = {
                palavra: pesquisa  //primeira posição
            }
            $.post('busca.php', dados, function(retorna) {
                $(".resultado").html(retorna);
            });

        }
    });
});