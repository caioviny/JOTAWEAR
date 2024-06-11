<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Voce não pode acessar está página porque não está logado. <p><a href=\"login.php\">Entrar</a></p>");
}
?>