<?php 
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php include_once './config/config.php' ?>

<!DOCTYPE html>
<html lang="pt-br">

<!--Chama o header dentro da pasta partes -->
<?php include './partes/header.php'?>

    <!--.............INICIO [BANNER.PHP].............-->
    <?php include './partes/banner.php' ?>

    <!--..|CATEGORIAS EM DESTAQUE|..[categoria_destaque.php]-->
    <?php include './partes/categoria_destaque.php' ?>
    
    <!--..|PRODUTO VENDAS PHP|..[PRODUTOS_VENDA.PHP]-->
    <?php include './partes/produtos_venda.php'?>
    
    <!--..|OFERTA BANNER SPIDER REALESE|..[OFERTA_BANNER.PHP]-->
    <?php include './partes/oferta_banner.php' ?>

    <!--FEEDBACK [FEEDBACK.PHP]-->
    <?php include './partes/feedback.php'?> 
    
    <!--ENVIO DE MSG [ENVIO.PHP]-->
    <?php include './partes/envio.php' ?>

    <!--RODAPE DO SITE [RODAPE.PHP]-->
    <?php include './partes/rodape.php'?>

    <!-- Icones SRC -->
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <!--Para chamar o JAVA SCRIPT (que fica sempre no fechamento do /body)-->
    <script src="assets/js/app.js"></script>
</body>
</html>