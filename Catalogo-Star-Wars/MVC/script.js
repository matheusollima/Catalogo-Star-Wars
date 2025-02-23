

/////////////////////////////////// CARROSSEL PARA LISTAR PERSONAGENS/////////////////////////////////////////////////////////////

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




// let arrayPersonagens = Object.values(personagens);


// let totalPersonagens = arrayPersonagens.length;
// let totalBotoes = botoes.length;

// for(i=0; i<totalPersonagens; i++){
//    for(j=0; j<totalBotoes; j++){
//     if(Number(botoes[j].id) == i){
//         let nomePersonagem = botoes[j].querySelector('.nome-main');
//         nomePersonagem.textContent = personagens[i]['name'];
//     }
//    }

// }


//Função para abrir a Janela modal
function abrirModal( personagens, id ){
   
    // abrir a janela modal adicionando a janela a classe .abrir
    const modal = document.getElementById('janela-modal');
    const body = document.querySelector('body');
   //  let idBotao = idDoBotao;
   let idBotao = id;
   //  let id = idLista;
    let personagens1 = personagens;
    console.log(personagens1.name);
   
    modal.classList.add('abrir');
    body.classList.add('bloqBody');
    
  
    //imagem personagem
    
    const imagem_personagem_modal = document.getElementById('imagem-personagem-modal');
 
    imagem_personagem_modal.src = "imgs/personagens/episode0"+idFilme+"/imagens-janela-modal/"+idBotao+".webp";
 
 
    // nome personagem
    const nome = document.getElementById('nome-personagem');
    nome.textContent = personagens1['name']; 
   
   // altura
    const altura = document.getElementById('altura');
    altura.textContent = personagens1['height'];
 
    //peso
    const peso = document.getElementById('peso');
    peso.textContent = personagens1['mass'];
 
    // data nascimento
    const data_nasc = document.getElementById('data-nasc');
    data_nasc.textContent = personagens1['birth_year'];
   
    // cor do olho
    const cor_olhos = document.getElementById('cor-olhos');
    cor_olhos.textContent = personagens1['eye_color'];
 
   //cor do cabelo
    const cor_cabelo = document.getElementById('cor-cabelo');
    cor_cabelo.textContent = personagens1['hair_color'];
 
   //cor da pele
   const cor_pele = document.getElementById('cor-pele');
   cor_pele.textContent = personagens1['skin_color'];
 
  //genero
  const genero = document.getElementById('genero');
  genero.textContent = personagens1['gender'];
 
    //Evento para fechar a janela modal
    modal.addEventListener('click', (e)=>{
      if(e.target.id == 'fechar' || e.target.id == 'janela-modal'){
         modal.classList.remove('abrir');
         body.classList.remove('bloqBody');
 
      }
    })
 
 
 }













//adicionando o evento de clique aos botões
// botoes.forEach( botao =>{
//     botao.addEventListener('click', function(event){
//         var idDoBotao = event.target.id;
//         abrirModal(idDoBotao);
//     });
    
// });


        
       
    
   
// /////////////////////////////// TENTATIVA 01 DE USAR AJAX ////////////////////////////////////


// document.querySelectorAll('.btn-personagem').forEach(function (botao) {
//     botao.addEventListener('click', function () {
//         var id = this.getAttribute('id');
//         console.log(id);
//         $.ajax({
//           method: "POST",
//           url: "filme01.php",
//           data: {text: id },
       
//         })
//          .done(function(response){
//           $("p.ajaxTexto2").html(response);  
//           abrirModal(id, 0);
//          personagens = null;

//          });
       
    
//     });
//     });




 






// window.addEventListener('scroll', function(){
//     let posicaoY = window.scrollY;
//     console.log(posicaoY);
// })











