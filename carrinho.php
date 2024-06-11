<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Joey Virtual Roupas Joey.com.br - JJ.com.br</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/davi_style.css">
    <link rel="icon" href="assets/img/LogoTrue.png">
    <link rel="icon" href="assets/img/">
</head>

<body>
    <!-- Inicio BANNER -->
    <div class="novoMenu">
        <!--Inicio CONTAINER -->
        <div class="container">
            <!--Inicio NAVEGAÇÃO TOPO -->
            <div class="navebar" style=" display: flex; align-items: center; padding: 20px;">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/LogoTrue.png" alt="JOEY ROUPAS" width="125px"></a>
                </div>
                <!-- INICIO MENU Navegação TOPO -->
                <!--Navegação lateral (->) -->
                <nav>
                    <!--UL para criar listas não ordenadas -->
                    <ul id="menuItens">
                        <!-- Li = define cada item da lista -->
                        <li><a href="index.php" title="">Inicio</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="" title="">Contatos</a></li>
                        <li><a href="" title="">Minha Conta</a></li>
                    </ul>
                </nav>
                <!-- FIM MENU Navegação TOPO -->
                <a href=""><img src="assets/img/bag-handle.png" alt="" width="30px" height="30px"></a>
                <!--MENU P/ CELULAR-->
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
            <!--FIM NAVEGAÇÃO TOPO-->
        </div>
        <!--FIM CONTAINER  -->
    </div>
    <!-- Fim Banner -->

    <!-------------INICIO CARRINHO DE COMPRAS-------------------->
    <div class="corpo-categorias carrinho-compras">
        <!-- Início da tabela do carrinho de compras -->
        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
            <!-- Linha representando um item no carrinho -->
            <tr>
                <!-- Coluna do Produto -->
                <td>
                    <!-- Informações do produto no carrinho -->
                    <div class="carrinho_info">
                        <img src="assets/img/camisaJ_modelo1.png" alt="">
                        <!-- Descrição do produto -->
                        <div>
                            <p>Camisa Jwear</p>
                            <small style="color: black;">Valor: R$130</small>
                            <br>
                            <!-- Link para remover o item do carrinho -->
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <!-- Coluna da Quantidade com um formulário -->
                <td>
                    <form action="" method="post">
                        <!-- Input para a quantidade de itens -->
                        <input type="number" value="1">
                    </form>
                </td>
                <!-- Coluna do Preço -->
                <td>R$130</td>
            </tr>
        </table>
        <!-- Fim da tabela do carrinho de compras -->
    </div>
    

    <!-- Icones SRC -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <!--Para chamar o JAVA SCRIPT (que fica sempre no fechamento do /body)-->
    <script src="assets/js/app.js"></script>
</body>

</html>