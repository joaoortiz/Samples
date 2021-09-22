<?php

$server = "mysql:host=localhost;dbname=northwind;";
$user = "root";
$passwd = "";

try{
$vConn = new PDO($server,$user,$passwd);

$vConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$vConn->exec("set names utf8");

}catch(Exception $erro){
    echo $erro->getMessage();
}


