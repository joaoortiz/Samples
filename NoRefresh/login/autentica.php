<?php

include '../Conexao.php';

$user = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$pass = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

$sql = "Select * from usuarios where nome_USUARIO like '$user' and senha_USUARIO like '$pass'";
$rsLogin = $vConn->query($sql);

if($rsLogin->rowCount()>0){
    echo "<font color=green>rolou</font>";
}else{
    echo "<font color=red>Dados Invalidos</font>";
}


