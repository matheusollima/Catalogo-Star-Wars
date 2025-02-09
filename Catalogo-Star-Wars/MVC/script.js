

/////////////////////////////////// CARROSSEL PARA LISTAR PERSONAGENS/////////////////////////////////////////////////////////////
console.log("teste"); 


const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0];
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, prevPageX, prevScrollLeft;

const showHideIcons = () => {
    let scrollWidth =  carousel.scrollWidth - carousel.clientWidth;
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon =>{
    icon.addEventListener("click", () =>{
    let firstImgWidth = firstImg.clientWidth + 14;
    carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
     setTimeout(()=> showHideIcons(),60);
    });
});

const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX;
    prevScrollLeft = carousel.scrollLeft;
    carousel.classList.add("dragging");
    
}


const dragging = (e) => {
    if(!isDragStart) return;
    e.preventDefault();
    console.log("Posição X : " + e.pageX);
    let positionDiff = e.pageX - prevPageX;
     console.log("scrollLeft: " + carousel.scrollLeft);
     console.log("scrollWidth: " + scrollWidth)
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = ()=>{
    isDragStart = false;
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("mouseup", dragStop);
carousel.addEventListener("mouseleave", dragStop);


/////////////////////////////////////// JANELA MODAL PERSONAGENS /////////////////////////////////////////////////////


let botoes = document.querySelectorAll(".btn-personagem");

let arrayPersonagens = Object.values(personagens);


let totalPersonagens = arrayPersonagens.length;
let totalBotoes = botoes.length;

for(i=0; i<totalPersonagens; i++){
   for(j=0; j<totalBotoes; j++){
    if(Number(botoes[j].id) == i){
        let nomePersonagem = botoes[j].querySelector('.nome-main');
        nomePersonagem.textContent = personagens[i]['name'];
    }
   }

}


// Função para abrir a Janela modal
function abrirModal(idDoBotao ){
   
   // abrir a janela modal adicionando a janela a classe .abrir
   const modal = document.getElementById('janela-modal');
   const body = document.querySelector('body');
   let id = idDoBotao;
   console.log(typeof id);
   modal.classList.add('abrir');
   body.classList.add('bloqBody');


   //imagem personagem
   
   const imagem_personagem_modal = document.getElementById('imagem-personagem-modal');

   imagem_personagem_modal.src = "imgs/personagens/episode0"+idFilme+"/imagens-janela-modal/"+id+".webp";
   console.log(imagem_personagem_modal);

   // nome personagem
   const nome = document.getElementById('nome-personagem');
   nome.textContent = personagens[id]['name']; 

  // altura
   const altura = document.getElementById('altura');
   altura.textContent = personagens[id]['height'];

   //peso
   const peso = document.getElementById('peso');
   peso.textContent = personagens[id]['mass'];

   // data nascimento
   const data_nasc = document.getElementById('data-nasc');
   data_nasc.textContent = personagens[id]['birth_year'];
  
   // cor do olho
   const cor_olhos = document.getElementById('cor-olhos');
   cor_olhos.textContent = personagens[id]['eye_color'];

  //cor do cabelo
   const cor_cabelo = document.getElementById('cor-cabelo');
   cor_cabelo.textContent = personagens[id]['hair_color'];

  //cor da pele
  const cor_pele = document.getElementById('cor-pele');
  cor_pele.textContent = personagens[id]['skin_color'];

 //genero
 const genero = document.getElementById('genero');
 genero.textContent = personagens[id]['gender'];

   //Evento para fechar a janela modal
   modal.addEventListener('click', (e)=>{
     if(e.target.id == 'fechar' || e.target.id == 'janela-modal'){
        modal.classList.remove('abrir');
        body.classList.remove('bloqBody');

     }
   })


}

//adicionando o evento de clique aos botões
botoes.forEach( botao =>{
    botao.addEventListener('click', function(event){
        var idDoBotao = event.target.id;
        abrirModal(idDoBotao);
    });
    
});

window.addEventListener('scroll', function(){
    let posicaoY = window.scrollY;
    console.log(posicaoY);
})


console.log(personagens);


/////////////////// ALTERNAR ENTRE ORDEM CRONOLÓGICA E DE LANÇAMENTO /////////////////////////////////

// document.getElementById('toggleOrderBtn').addEventListener('click', function() {
//     const movieList = document.getElementById('movieList');
//     const movies = Array.from(movieList.children);
//     const currentOrder = this.getAttribute('data-order') || 'release';

//     if (currentOrder === 'release') {
//         // Ordenar por ordem cronológica (1, 2, 3, 4, 5, 6)
//         movies.sort((a, b) => a.getAttribute('data-order') - b.getAttribute('data-order'));
//         this.setAttribute('data-order', 'chrono');
//         this.textContent = 'Ordenar por Lançamento';
//     } else {
//         // Ordenar por data de lançamento (4, 5, 6, 1, 2, 3)
//         movies.sort((a, b) => {
//             const orderA = parseInt(a.getAttribute('data-order'));
//             const orderB = parseInt(b.getAttribute('data-order'));
//             const releaseOrder = {4: 0, 5: 1, 6: 2, 1: 3, 2: 4, 3: 5};
//             return releaseOrder[orderA] - releaseOrder[orderB];
//         });
//         this.setAttribute('data-order', 'release');
//         this.textContent = 'Ordenar por Ordem Cronológica';
//     }

//     movieList.innerHTML = '';
//     movies.forEach(movie => movieList.appendChild(movie));
// });






