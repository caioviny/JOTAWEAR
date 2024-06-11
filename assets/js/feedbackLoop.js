const feedbacks = [
    {
        texto: "Jwear: A melhor loja para quem busca roupas de qualidade e com estilo. Recomendo!",
        imagem: "assets/img/gu.jpg",
        nome: "Gustavo Pereira",
        rating: 5
    },
    {
        texto: "A qualidade é excelente, os preços são justos e o atendimento é impecável. A GOAT!",
        imagem: "assets/img/tevu.jpg",
        nome: "Estevu F.",
        rating: 5
    },
    {
        texto: "Encontrei peças únicas e estilosas na Jwear. Minha nova loja Underground favorita.",
        imagem: "assets/img/caio.jpg",
        nome: "Caio Vini",
        rating: 5
    }
];
const feedbackContainer = document.getElementById('feedback-container');
feedbacks.forEach(feedback => {
    const col = document.createElement('div');
    col.classList.add('col-3');
    col.innerHTML = `
        <ion-icon name="ribbon" class="feedback-icone"></ion-icon>
        <p>${feedback.texto}</p>
        <img src="${feedback.imagem}" alt="">
        <h3>${feedback.nome}</h3>
        <div class="rating">
            ${'<ion-icon name="star"></ion-icon>'.repeat(feedback.rating)}
        </div>
    `;
    feedbackContainer.appendChild(col);
});