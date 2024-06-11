<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';
// Inicia a sessão
session_start();
// Se o usuário não estiver logado, redireciona para a página de login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
// Verifica se os campos de e-mail ou senha foram submetidos via método POST
if (isset($_POST['email']) && isset($_POST['senha'])) {
    // Verifica se o campo de e-mail está vazio
    if (empty($_POST['email'])) {
        $error = "Preencha seu EMAIL.";
    } 
    // Verifica se o campo de senha está vazio
    elseif (empty($_POST['senha'])) {
        $error = "Preencha sua SENHA.";
    } else {
        // Escapa caracteres especiais para prevenir injeção de SQL
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);
        
        // Consulta SQL para verificar se o usuário e senha estão corretos
        $sql_code_select = "SELECT * FROM users WHERE email = '$email' AND password = '$senha'";
        $sql_query_select = $conexao->query($sql_code_select) or die("Falha na execução do Código SQL: " . $conexao->error);

        // Obtém o número de linhas retornadas pela consulta
        $quantidade = $sql_query_select->num_rows;

        // Se um único usuário correspondente for encontrado
        if ($quantidade == 1) {
            // Obtém os dados do usuário encontrado
            $usuario = $sql_query_select->fetch_assoc();

            // Define as variáveis de sessão para o ID e nome do usuário
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            // Redireciona para a página index.php após o login bem-sucedido
            header("Location: index.php");
            exit(); // Termina o script para evitar execução adicional
        } else {
            // Se nenhum usuário correspondente for encontrado, exibe mensagem de erro
            $error = "FALHA AO LOGAR! EMAIL OU SENHA INCORRETOS";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Jwear Login</title>
</head>
<body>
<form action="" method="post">
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="Email" name="email"/>
      <input type="password" placeholder="Senha" name="senha"/>
      <button type="submit">Faça Login</button>
      <?php if(isset($error)) { ?>
      <p class="error"><?php echo $error; ?></p>
      <?php } ?>
      <p class="message">Não registrado? <a href="registro.php">Crie uma conta</a></p>
    </form>
    <button type="button" onclick="location.href='index.php'">Acesse sem fazer login</button>
  </div>
</div>
</form>
</body>
</html>
