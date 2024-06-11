<!DOCTYPE html>
<html lang="pt-br">
<?php include './partes/header2.php' ?>

<!--| Produto Detalhe ----- INICIO | -->
<!--Parte do Produto-->
<div class="corpo-categorias ver-produto">
    <div class="linha">
        <div class="col-2">
            <img src="assets/img/camisaJ_modelo1.png" alt="" id="produtoImg">
            <!--| INICIO DO LINHA DA GALERIA |-->
            <div class="img-linha">
                <!--| INICIO DO ITEM DA GALERIA |-->
                <!--Miniaturas dos produtos (Camisas e etc)-->
                <div class="img-col">
                    <img src="assets/img/camisaJ_modeloFire.png" alt="" class="produtoMiniatura">
                </div>
                <!--| FIM - DO ITEM DA GALERIA |-->
                <!--| INICIO DO ITEM (2) DA GALERIA |-->
                <div class="img-col">
                    <img src="assets/img/camisaJ_modelo1.png" alt="" class="produtoMiniatura">

                </div>
                <!--| FIM - DO ITEM (2) DA GALERIA |-->
                <!--| INICIO DO ITEM (3) DA GALERIA |-->
                <div class="img-col">
                    <img src="assets/img/camisaJ_modelo1.png" alt="" class="produtoMiniatura">
                </div>
                <!--| FIM - DO ITEM (3) DA GALERIA |-->
                <!--| INICIO DO ITEM (4) DA GALERIA |-->
                <div class="img-col">
                    <img src="assets/img/camisaJ_modelo1.png" alt="" class="produtoMiniatura">
                </div>
                <!--| FIM - DO ITEM (4) DA GALERIA |-->
            </div>
            <!--| FIM DO LINHA DA GALERIA |-->
        </div>

        <!-- Detalhes do Produto -->
        <div class="col-2">
            <!--Titulo & SubTitulo-->
            <p style="color: black;">Compre com desconto</p>
            <h1>Camisa Jwear JJ</h1>
            <h4>R$ 100</h4>
            <form action="carrinho.php" method="post">
                <input type="hidden" name="produto_nome" value="Camisa Jwear JJ">
                <input type="hidden" name="produto_preco" value="100">
                <input type="hidden" name="produto_imagem" value="assets/img/camisaJ_modelo1.png">
                <select name="produto_tamanho">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="XG">XG</option>
                    <option value="XXG">XXG</option>
                </select>
                <input type="number" name="produto_quantidade" value="1">
                <button type="submit" class="btn">Adicionar ao Carrinho</button>
            </form>

            <!--Descrição do produto-->
            <h3>Descrição: </h3>
            <p style="color: black;">A camisa Jwear JJ é carregada de história, com sua cor marrom,
                desbota os sentimentos mais intensos que uma pessoa é capaz de expressar.
            </p>
        </div>
    </div>
</div>
<!--| Produto Detalhe ----- FIM | -->
<?php include './partes/mais_produtos.php' ?>

<?php include './partes/rodape.php' ?>

<!-- Icones SRC -->
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<!--Para chamar o JAVA SCRIPT (que fica sempre no fechamento do /body)-->
<script src="assets/js/app.js"></script>
</body>

</html>