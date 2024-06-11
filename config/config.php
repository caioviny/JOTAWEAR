<?php 
//Caso estiver erros - show
ini_set('display_errors', 1);
error_reporting(1);

header('Content-Type: text/html; charset=utf-8');
// Início de uma sessão - sumir as session na URL do site
// Uso de uma var global que pode ser usada em outras sessões
session_start();

//VAR GLOBAIS de definição do DB
define("TITLE", "Jwear Loja Virtual");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_SCHEMA", "phpsql");
define("DB_PORT", "3306");
?>
