<!-- Mostrar os produtos -->
<!-- INICIO Produtos em Destaque -->
<div class="corpo-categorias">
    <h2 class="titulo">Produtos em Destaque</h2>

    <!-- INICIO LINHA DO CORPO CATEGORIAS em Destaque -->
    <div class="linha">
        <?php
        // Lista de produtos (ID, Nome, Preço, Imagem)
        $produtos = [
            ['id' => 1, 'nome' => 'Camisa Jwear', 'preco' => 'R$ 300,00', 'imagem' => 'camisaJ_modelo1.png'],
            ['id' => 2, 'nome' => 'Camisa Feel TFire', 'preco' => 'R$ 300,00', 'imagem' => 'camisaJ_modeloFire.png'],
            ['id' => 3, 'nome' => 'Camisa NVRTMCH', 'preco' => 'R$ 300,00', 'imagem' => 'CAMISA_NVRTMCH T-SHIRT FRONT.png'],
            ['id' => 4, 'nome' => 'Camisa Slim Trevor', 'preco' => 'R$ 300,00', 'imagem' => 'LogoJoey_modelo2.png'],
        ];
        // Loop através dos produtos
        foreach ($produtos as $produto) {
            echo '<div class="col-4">';
            // Link para ver_produto.php com o ID do produto como parâmetro
            echo '<a href="ver_produto.php?id=' . $produto['id'] . '" title="">';
            echo '<img src="assets/img/' . $produto['imagem'] . '" alt="">';
            echo '</a>';
            echo '<h4>' . $produto['nome'] . '</h4>';
            echo '<p>' . $produto['preco'] . '</p>';
            echo '<div class="rating" style="color: darkorange;">';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '<ion-icon name="star"></ion-icon>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <!-- FIM LINHA DO CORPO CATEGORIAS em Destaque -->
</div>

