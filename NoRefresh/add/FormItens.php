<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        

        <?php
        include "../Conexao.php";

        session_start();
        $_SESSION['carrinho'] = "";
        $_SESSION['total'] = 0;
        
        $sql = "Select * from products";
        $rs = $vConn->query($sql);

        if ($rs) {
            $tbl = $rs->fetchAll(PDO::FETCH_BOTH);
        }
        ?>

        <h4>Adicionar Itens</h4>

        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    
                        <div class="col-lg-6">
                            <div class="form-group">
                            <select name="HTML_item"  id="HTML_item" class="form-control">
                                <?php foreach ($tbl as $row) { ?>

                                    <option value="<?= $row['ProductID']; ?>"><?= $row['ProductName']; ?></option>

                                <?php }
                                ?>
                            </select>
                        </div>
                        </div>
                    
                        <div class="col-lg-6">
                            <div class="form-group">
                            <input type="number" class="form-control" name="HTML_qtde" id="HTML_qtde">
                        </div>
                        </div>
                    </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                        <button type="button" class="btn btn-info float-right" id="btnAdd">Adicionar Item</button>
                    </div>
                    </div>
                </div>
                
            </form>
            
            <hr>
            
            <div class="resultado">
                
            </div>
            
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="addItem.js"></script>
    </body>
</html>
