<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se os campos foram submetidos via método POST
if (isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha'])) {
    // Verifica se algum dos campos está vazio
    if (empty($_POST['usuario']) || empty($_POST['email']) || empty($_POST['senha'])) {
        $error = "Preencha todos os campos.";
    } else {
        // Escapa caracteres especiais para prevenir injeção de SQL
        $usuario = $conexao->real_escape_string($_POST['usuario']);
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);
        
        // Consulta SQL para inserir o novo usuário no banco de dados
        $sql_code_insert = "INSERT INTO users (name, email, password) VALUES ('$usuario', '$email', '$senha')";
        $sql_query_insert = $conexao->query($sql_code_insert) or die("Falha na execução do Código SQL: " . $conexao->error);
        
        // Verifica se o registro foi bem-sucedido
        if ($sql_query_insert) {
            $success = "Conta criada com sucesso!";
        } else {
            $error = "Erro ao criar conta. Por favor, tente novamente.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="assets/css/registro.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/register.css">
    <title>Jwear Register</title>
</head>
<body>
    <form action="" method="post">
        <div class="register-page">
            <div class="form">
                <form class="register-form">
                    <input type="text" placeholder="Nome" name="usuario" required/>
                    <input type="email" placeholder="Email" name="email" required/>
                    <input type="password" placeholder="Senha" name="senha" required/>
                    <button type="submit">Crie sua conta</button>
                    <?php if(isset($error)) { ?>
                    <p class="error"><?php echo $error; ?></p>
                    <?php } elseif(isset($success)) { ?>
                    <p class="success"><?php echo $success; ?></p>
                    <?php } ?>
                    <p class="message">Já tem uma conta? <a href="login.php">Faça login</a></p>
                </form>
                <button type="button" onclick="location.href='index.php'">Acesse sem fazer login</button>
            </div>
        </div>
    </form>
</body>
</html>
