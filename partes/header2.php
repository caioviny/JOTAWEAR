<head>
    <?php include './config/config.php'?>
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
                    <a href="index.html"><img src="assets/img/LogoTrue.png" alt="JOEY ROUPAS" width="125px"></a>
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
                <a href="carrinho.php"><img src="assets/img/bag-handle.png" alt="" width="30px" height="30px"></a>
                <!--MENU P/ CELULAR-->
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
            <!--FIM NAVEGAÇÃO TOPO-->
</body>