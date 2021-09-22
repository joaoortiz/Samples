<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="flag-icon/css/flag-icon.css">

    </head>
    <body>
        <h4>Pesquisa de Clientes</h4>        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <form action="" method="post" id="FormConsulta">
                        <div class="form-group">
                            <label for="txtNome">Informe o País:</label>
                            <input type="text" class="form-control" id="HTML_pais" name="HTML_pais" placeholder="Informe o país de localização">
                        </div>
                        <div class="form-group">
                            <button type="button" id="botao" class="btn btn-primary">Buscar</button>
                        </div>

                    </form>
                </div>
            </div>



            <hr>

            <div class="resultado row">




            </div>


        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="search.js"></script>
    </body>
</html>
