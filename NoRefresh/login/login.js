$(function() {

    $("#botao").click(function() {
        var user = $("#HTML_usuario").val();
        var pass = $("#HTML_senha").val();

        if (user != '' && pass != '') {
            var dados = {
                usuario: user,
                senha: pass
            }

            $.post('autentica.php', dados, function(retorna) {
                $(".resultado").html(retorna);
            });
        }
    });

});