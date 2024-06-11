var menuItens = document.getElementById("menuItens");
//Var no JS 'menuItens' que retorna oque está no ID do index.html(menuItens)
menuItens.style.maxHeight = "0px";
//Ocultando o elemento do menu - (que será uma Caixa Expansiva)

//----------------------Criando função no JS--------------------
//-------------CONDIÇÃO DE ABRIR O MENU SEM TRANSIÇÃO-----------
function menucelular(){
    //Se o MENU estiver fechado(== 0px) poderá ser aberto(= 200px)
    if (menuItens.style.maxHeight == "0px") {
        menuItens.style.maxHeight = "200px";
    } else {
        //Se não - Continua fechado
        menuItens.style.maxHeight = "0px";
    }
}

// Recupera o Id da IMG
var produtoImg = document.getElementById("produtoImg");
// Recupera da CLASS
var produtoMiniatura = document.getElementsByClassName("produtoMiniatura");

// Função para trocar a imagem com base no índice
function trocarImagem(indice) {
    produtoImg.src = produtoMiniatura[indice].src;
}
// Atribui o evento de clique para cada miniatura
for (var i = 0; i < produtoMiniatura.length; i++) {
    produtoMiniatura[i].onclick = function(index) {
        return function() {
            trocarImagem(index);
        };
    }(i);
}
