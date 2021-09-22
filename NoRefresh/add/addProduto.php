<?php
include "../Conexao.php";

session_start();

$item = filter_input(INPUT_POST, 'idItem', FILTER_SANITIZE_NUMBER_INT);
$qtde = filter_input(INPUT_POST, 'qtde', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['carrinho'].= $item . "#" . $qtde . ";";

$vItens = explode(";", $_SESSION['carrinho']);?>

<table class="table">
    
    
<?php

for($i=0; $i<count($vItens); $i++){
    $vItem = explode("#",$vItens[$i]);
    $id = $vItem[0];

    if($id!=""){
    
$sqlItem = "Select * from products where productid = '$id'";
$rsItem = $vConn->query($sqlItem);
$tblItem = $rsItem->fetch();

$_SESSION['total'] += $tblItem['UnitPrice']*$qtde;

echo "<tr>";
echo "<td>".$tblItem['ProductName']."</td>";
echo "<td>".$tblItem['UnitPrice']."</td>";
echo "<td>".$qtde."</td>";
echo "<td>".$tblItem['UnitPrice']*$qtde."</td>";
echo "</tr>";
    }
}

?>
</table>

Valor da compra: <?=$_SESSION['total']?>


