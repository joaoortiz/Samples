<meta charset="utf-8">
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <center>
                        Informe o cep
                    </center>
                    <br>
                    <form action="index.php" method="GET">
                        <div class="form-group">
                            <input type="text" name="HTML_CEP" class="form-control"> 
                        </div>
                        <input type="hidden" name="acao" value="1">
                        <input type="submit" value="Consultar" class="btn btn-primary">
                    </form>                                
                </div>
            </div>
            
            <hr>
            
            <?php
            
            /*****EXIBIÇAO DOS DADOS DA CONSULTA*****/
            
            if(isset($_GET['acao'])){
                
                $cep = $_GET['HTML_CEP'];
                $endereco = getEndereco($cep);
           
                ?>
            
            <h2>
                Logradouro: <?=$endereco->logradouro;?><br>
                Bairro: <?=$endereco->bairro;?><br>
                Cidade: <?=$endereco->localidade;?><br>
                Estado: <?=$endereco->uf;?><br>
            </h2>
                
            <?php    
            }            
            ?> 
            <hr>
            
            <iframe src="https://www.google.com/maps/embed?pb<?=$endereco->logradouro;?>+<?=$cep?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
    </body>
    
</html>

<?php
    /***FUNÇÃO DE LEITURA DO ARQUIVO XML***/

    function getEndereco($cep){
        
        $URL = "http://viacep.com.br/ws/$cep/xml";
        $XML = simplexml_load_file($URL);
        
        return $XML;      
        
    }

?>
