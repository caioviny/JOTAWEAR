<?php 
include_once './config.php';
// Criação de uma VAR com uma CLASSE que define os parâmetros do BD no SQL
    //O nome deve ser o do 'Create database' não o do conection name 
    //Ao inves de usar assim...
    //$db = new mysqli("127.0.0.1", "root", "", "phpsql", 3306);
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_SCHEMA, DB_PORT);
    // Verifica se houve erro na conexão
    if ($db->connect_errno) {
        echo "Erro na conexão com o Banco de dados: {$db->connect_error}";
        exit();
    }
    // Se não houver erros, mostra isso
    //echo "Sem erros na execução";
?>
