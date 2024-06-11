<?php 

include './config/config.php';

$conexao = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_SCHEMA, DB_PORT);

if($conexao->error){
    die("Falha ao conectar ao BD: ".$conexao->error);
}
?>