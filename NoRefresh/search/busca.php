<?php
include "../Conexao.php";

$search = filter_input(INPUT_POST,'palavra',FILTER_SANITIZE_STRING);
//$search = $_POST['HTML_pesquisa'];

$sql = "Select * from customers where country like '$search'"; 
$rsClientes = $vConn->query($sql);

if($rsClientes){
    $tbl = $rsClientes->fetchAll(PDO::FETCH_BOTH);
    
    echo $rsClientes->rowCount() . " registros.";
    
    foreach($tbl as $row){
        $data = "<div class='col-lg-3'>";
        $data.= "<div class='card m-2 border-info'>";
        $data.= "<div class='card-body text-center'><span class='flag-icon flag-icon-". $row['icon']." flag-icon-squared'></span><br>";
        $data.= "<h5>".$row['CustomerID']."</h5><small style='line-height:1px;'>". $row['CompanyName']."</small><hr>";
        $data.= "<small>".$row['Phone']."</small>";
        $data.= "</div>";        
        
        $data.="</div>";
        $data.="</div>";
        
        
        echo $data;
    }
    
}else{
    echo "Nenhum registro encontrado";
}
